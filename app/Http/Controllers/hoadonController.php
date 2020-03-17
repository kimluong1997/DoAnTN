<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\hoadon;
use App\khachhang;

class hoadonController extends Controller
{
    public function getDanhsach(){
             $hoadon=hoadon::all();


    return view('admin.hoadon.danhsach',['hoadon'=>$hoadon]);


    }

     public function getThem(){
      $khachhang= khachhang::all();

       return view('admin.hoadon.them',['khachhang'=>$khachhang]);
    }

     public function postThem( Request $rq ){
      

      $hoadon= new hoadon;

      $hoadon->id_khachhang=$rq->id_khachhang;
      $hoadon->NgayDatHang=$rq->NgayDatHang;
      $hoadon->TongTien=$rq->TongTien;
      $hoadon->HinhThucTT=$rq->HinhThucTT;
          
      $hoadon->save();

      return redirect('admin/hoadon/them')->with('thongbao','thêm thành công');
    }

     public function getSua($id){
        $hoadon= hoadon::find($id);
         $khachhang= khachhang::all();

        return view('admin.hoadon.sua',['hoadon'=>$hoadon],['khachhang'=>$khachhang]);
      
    }
      public function postSua(Request $rq,$id){
        $hoadon= hoadon::find($id);
       
     
     $hoadon->id_khachhang=$rq->id_khachhang;
      $hoadon->NgayDatHang=$rq->NgayDatHang;
      $hoadon->TongTien=$rq->TongTien;
      $hoadon->HinhThucTT=$rq->HinhThucTT;
          
      $hoadon->save();

      return redirect('admin/hoadon/sua/'.$id)->with('thongbao','sửa thành công');
      
    }

      public function getXoa($id){
          $hoadon= hoadon::find($id);
          $hoadon->delete();
         
        return redirect('admin/hoadon/danhsach')->with('thongbao','xóa thành công');
      
      
    }


}