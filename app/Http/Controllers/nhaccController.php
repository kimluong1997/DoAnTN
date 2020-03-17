<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\sanpham;
use App\nhacungcap;

class nhaccController extends Controller
{
   public function getDanhsach(){
             $nhacungcap=nhacungcap::all();


    return view('admin.nhacungcap.danhsach',['nhacungcap'=>$nhacungcap]);


    }




     public function getThem(){
      $sanpham=sanpham::all();

    	 return view('admin.nhacungcap.them',['sanpham'=>$sanpham]);
    }

     public function postThem( Request $rq ){
        $this->validate($rq,[
         'TenNCC'=>'required'
        ],[
          'TenNCC.required'=>'bạn chưa nhâp tên sp'
        ]);
    	

    	$nhacungcap= new nhacungcap;
        $nhacungcap->id=$rq->id;
        $nhacungcap->id_sp=$rq->id_sp;
    	$nhacungcap->TenNCC=$rq->TenNCC;
    	$nhacungcap->DiaChi=$rq->DiaChi;
    	$nhacungcap->DienThoai=$rq->DienThoai;
        $nhacungcap->GhiChu=$rq->GhiChu;
        $nhacungcap->img=$rq->img;
     
     
    	$nhacungcap->save();

    	return redirect('admin/nhacungcap/them')->with('thongbao','thêm thành công');
    }

     public function getSua($id){
      	$nhacungcap= nhacungcap::find($id);
         $sanpham= sanpham::all();

     	  return view('admin.nhacungcap.sua',['nhacungcap'=>$nhacungcap],['sanpham'=>$sanpham]);
    	
    }
      public function postSua(Request $rq,$id){
      	$nhacungcap= nhacungcap::find($id);
      	$this->validate($rq,[
          'TenSP'=>'required|unique:nhacungcap,TenNCC|min:3'
      	
      	],[
          'TenNCC.required'=>'bạn chưa nhập tên',
           'TenNCC.unique'=>'tên trùng tên cũ',
           'TenNCC.min'=>'tên quá ngắn'
      	]);

     
   
        $nhacungcap->id=$rq->id;
        $nhacungcap->id_sp=$rq->id_sp;
    	$nhacungcap->TenNCC=$rq->TenNCC;
    	$nhacungcap->DiaChi=$rq->DiaChi;
    	$nhacungcap->DienThoai=$rq->DienThoai;
        $nhacungcap->GhiChu=$rq->GhiChu;
        $nhacungcap->img=$rq->img;
     
     
    	$nhacungcap->save();

    	return redirect('admin/nhacungcap/sua/'.$id)->with('thongbao','sửa thành công');
    	
    }

      public function getXoa($id){
         	$nhacungcap= nhacungcap::find($id);
      		$nhacungcap->delete();
         
     	  return redirect('admin/nhacungcap/danhsach')->with('thongbao','xóa thành công');
}

}
