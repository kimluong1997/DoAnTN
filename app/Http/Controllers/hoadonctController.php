<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\hoadonct;
use App\hoadon;
use App\sanpham;

class hoadonctController extends Controller
{
    public function getDanhsach(){
             $hoadonct=hoadonct::all();


    return view('admin.hoadonct.danhsach',['hoadonct'=>$hoadonct]);


    }

     public function getThem(){
      $hoadon= hoadon::all();
       $sanpham= sanpham::all();
       return view('admin.hoadonct.them',['hoadon'=>$hoadon],['sanpham'=>$sanpham]);

       

      
    }

     public function postThem( Request $rq ){
      

      $hoadonct= new hoadonct;

      $hoadonct->id_hoadon=$rq->id_hoadon;
      $hoadonct->id_sanpham=$rq->id_sanpham;
     
      $hoadonct->SoLuong=$rq->SoLuong;
      $hoadonct->DonGia=$rq->DonGia;
          
      $hoadonct->save();

      return redirect('admin/hoadonct/them')->with('thongbao','thêm thành công');
    }

     public function getSua($id){
        $hoadonct= hoadonct::find($id);

        $hoadon= hoadon::all();
        $sanpham= sanpham::all();

        return view('admin.hoadonct.sua',['hoadon'=>$hoadon],['hoadonct'=>$hoadonct]);
         return view('admin.hoadonct.sua',['hoadonct'=>$hoadonct],['sanpham'=>$sanpham]);
      
    }
      public function postSua(Request $rq,$id){
        $hoadonct= hoadonct::find($id);
       
      $hoadonct->id_hoadon=$rq->id_hoadon;
      $hoadonct->id_sanpham=$rq->id_sanpham;
     
      $hoadonct->SoLuong=$rq->SoLuong;
      $hoadonct->DonGia=$rq->DonGia;
          
      $hoadonct->save();

      return redirect('admin/hoadonct/sua/'.$id)->with('thongbao','sửa thành công');
      
    }

      public function getXoa($id){
          $hoadonct= hoadonct::find($id);
          $hoadonct->delete();
         
        return redirect('admin/hoadonct/danhsach')->with('thongbao','xóa thành công');
      
      
    }


}