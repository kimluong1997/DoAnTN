<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\khachhang;
use App\sanpham;
use App\loaisanpham;
use App\hoadon;

class masterController extends Controller
{
  

    public function getMaster(){
            
      $khachhang=khachhang::where('id','<>',0)->paginate();
      $sanpham=sanpham::where('giaKM','<>',0)->paginate();
      $loaisanpham=loaisanpham::where('id','<>',0)->paginate();
      $hoadon=DB::table('hoadon')->join('khachhang', 'hoadon.id_khachhang', '=', 'khachhang.id')->get();;


       return view('admin.master',compact('khachhang','sanpham','loaisanpham','hoadon'));



    }

}
