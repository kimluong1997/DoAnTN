<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\loaisanpham;

class loaispController extends Controller
{
    public function getDanhsach(){
             $loaisp=loaisanpham::all();


    return view('admin.loaisp.danhsach',['loaisp'=>$loaisp]);


    }


     public function getThem(){
    	 return view('admin.loaisp.them');
    }

     public function postThem( Request $rq ){
        $this->validate($rq,[
         'TenSP'=>'required'
        ],[
          'TenSP.required'=>'bạn chưa nhâp tên sp'
        ]);
    	
    	$loaisp= new loaisanpham;
    	$loaisp->TenSP=$rq->TenSP;
    	$loaisp->MoTa=$rq->MoTa;
    	$loaisp->img=$rq->img;
    	$loaisp->save();

    	return redirect('admin/loaisp/them')->with('thongbao','thêm thành công');
    }

     public function getSua($id){
      	$loaisp= loaisanpham::find($id);

     	  return view('admin.loaisp.sua',['loaisp'=>$loaisp]);
    	
    }
      public function postSua(Request $rq,$id){
      	$loaisp= loaisanpham::find($id);
      	$this->validate($rq,[
          'TenSP'=>'required|unique:loaisanpham,TenSP|min:3'
      	
      	],[
          'TenSP.required'=>'bạn chưa nhập tên',
           'TenSP.unique'=>'tên trùng tên cũ',
           'TenSP.min'=>'tên quá ngắn'
      	]);

       $loaisp->TenSP=$rq->TenSP;
    	$loaisp->MoTa=$rq->MoTa;
    	$loaisp->img=$rq->img;
    	$loaisp->save();

    	return redirect('admin/loaisp/sua/'.$id)->with('thongbao','sửa thành công');
    	
    }

      public function getXoa($id){
         	$loaisp= loaisanpham::find($id);
      		$loaisp->delete();
         
     	  return redirect('admin/loaisp/danhsach')->with('thongbao','xóa thành công');
    	
    	
    }


}
