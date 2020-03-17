<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\khachhang;

class khachhangController extends Controller
{
    public function getDanhsach(){
             $khachhang=khachhang::all();


    return view('admin.khachhang.danhsach',['khachhang'=>$khachhang]);


    }

     public function getThem(){
    

    	 return view('admin.khachhang.them');
    }

     public function postThem( Request $rq ){
        $this->validate($rq,[
         'HoTen'=>'required'
        ],[
          'HoTen.required'=>'bạn chưa nhập tên khách hàng'
        ]);
    	

    	$khachhang= new khachhang;

    
    	$khachhang->HoTen=$rq->HoTen;
    	$khachhang->GioiTinh=$rq->GioiTinh;
    	$khachhang->Email=$rq->Email;
      $khachhang->DiaChi=$rq->DiaChi;
      $khachhang->DienThoai=$rq->DienThoai;
      $khachhang->GhiChu=$rq->GhiChu;
     	$khachhang->save();

    	return redirect('admin/khachhang/them')->with('thongbao','thêm thành công');
    }

     public function getSua($id){
      	$khachhang= khachhang::find($id);
      

     	return view('admin.khachhang.sua',['khachhang'=>$khachhang]);
    	
    }
    
      public function postSua(Request $rq,$id){
      	$khachhang= khachhang::find($id);
      	$this->validate($rq,[
          'HoTen'=>'required|unique:khachhang,HoTen|min:3'
      	
      	],[
          'HoTen.required'=>'bạn chưa nhập tên',
           'HoTen.unique'=>'tên trùng tên cũ',
           'HoTen.min'=>'tên quá ngắn'
      	]);

  
      $khachhang->HoTen=$rq->HoTen;
      $khachhang->GioiTinh=$rq->GioiTinh;
      $khachhang->Email=$rq->Email;
      $khachhang->DiaChi=$rq->DiaChi;
      $khachhang->DienThoai=$rq->DienThoai;
      $khachhang->GhiChu=$rq->GhiChu;
      $khachhang->save();

    	return redirect('admin/khachhang/sua/'.$id)->with('thongbao','sửa thành công');
    	
    }

      public function getXoa($id){
         	$khachhang= khachhang::find($id);
      		$khachhang->delete();
         
     	  return redirect('admin/khachhang/danhsach')->with('thongbao','xóa thành công');
    	
    	
    }


}
