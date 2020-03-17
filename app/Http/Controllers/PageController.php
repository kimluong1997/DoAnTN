<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\slide;
use App\sanpham;
use App\loaisanpham;
use App\Cart;
use Session;
use App\khachhang;
use App\hoadon;
use App\hoadonct;
use App\User;
use Hash;
use Auth;


class PageController extends Controller
{
    public function getSeach(Request $req){
       $sp= sanpham::where('TenSP','like','%'.$req->key.'%')->orwhere('DonGia',$req->key)->get();
       return view('page.seach',compact('sp'));

   }


   public function getIndex(){
     $slide=slide::all();


     $spmoi=sanpham::where('trangthai','moi')->paginate(4);


     $spkm=sanpham::where('giaKM','<>',0)->paginate(8);

     $spcu=sanpham::where('trangthai','cu')->paginate(3);


     return view('page.trangchu',compact('slide','spmoi','spkm','spcu'));
 }



 public function getloaisp(){
    return view('page.loaisp');
}

public function getloaisanpham($type){

    $sp_theoloai=sanpham::where('id_loaisp',$type)->get();
    $sp_khac=sanpham::where('id_loaisp','<>',$type)->paginate(2);
    $loai=loaisanpham::all();



    return view('page.loaisanpham',compact('sp_theoloai','loai','sp_khac'));
}
public function getchitietsanpham(Request $req){

    $sanpham=sanpham::where('id',$req->id)->first();
    $sp_tuongtu=sanpham::where('id_loaisp',$sanpham->id_loaisp)->paginate(3);

    return view('page.chitietsanpham',compact('sanpham','sp_tuongtu'));
}

public function getlienhe(){
 return view('page.lienhe');
}

public function getGioiThieu(){
    return view('page.gioithieu');
}

public function getAddtoCart(Request $req,$id){
    $sanpham = sanpham::find($id);
    $oldCart = Session('cart')?Session::get('cart'):null;
    $cart = new Cart($oldCart);
    $cart->add($sanpham, $id);
    $req->session()->put('cart',$cart);
    return redirect()->back();
}


public function getCheckout(){
    return view('page.dathang');
}


public function postCheckout(Request $req){
    $cart = Session::get('cart');

    $customer = new khachhang;
    $customer->HoTen = $req->name;
    $customer->GioiTinh = $req->gender;
    $customer->Email = $req->email;
    $customer->Diachi = $req->address;
    $customer->DienThoai = $req->phone;
    $customer->GhiChu = $req->notes;
    $customer->save();

    $bill = new hoadon;
    $bill->id_khachhang = $customer->id;
    $bill->NgayDatHang = date('Y-m-d');
    $bill->TongTien = $cart->TongTien;
    $bill->HinhThucTT = $req->payment_method;

    $bill->save();

    foreach ($cart->sanpham as $key => $value) {
        $bill_detail = new hoadonct;
        $bill_detail->id_hoadon = $bill->id;
        $bill_detail->id_sanpham = $key;
        $bill_detail->SoLuong = $value['SL'];
        $bill_detail->DonGia = ($value['Gia']/$value['SL']);
        $bill_detail->save();
    }
    Session::forget('cart');
    return redirect()->back()->with('thongbao','Đặt hàng thành công');

}

public function getLogin(){
    return view('page.dangnhap');
}

public function getSignin(){
    return view('page.dangki');
}

public function postSignin(Request $req){
    $this->validate($req,
        [
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|max:20',
            'fullname'=>'required',
            're_password'=>'required|same:password'
        ],
        [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người sử dụng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            're_password.same'=>'Mật khẩu không giống nhau',
            'password.min'=>'Mật khẩu ít nhất 6 kí tự'
        ]);
    $user = new User();
    $user->name = $req->fullname;
    $user->email = $req->email;
    $user->password = Hash::make($req->password);

    $user->quyen= $req->quyen;
    $user->save();
    return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
}


public function postLogin(Request $req){
    $this->validate($req,
        [
            'email'=>'required|email',
            'password'=>'required|min:6|max:20'
        ],
        [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Email không đúng định dạng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 6 kí tự',
            'password.max'=>'Mật khẩu không quá 20 kí tự'
        ]
    );
    $credentials = array('email'=>$req->email,'password'=>$req->password);



    if(Auth::attempt($credentials)){

        return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
    }
    else{
        return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
    }
} 


public function postLogout(){
    Auth::logout();
    return redirect()->route('trangchu');
}

}
