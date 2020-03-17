<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\slide;

class slideController extends Controller
{
    
    public function getDanhsach(){
             $slide=slide::all();


    return view('admin.slide.danhsach',['slide'=>$slide]);


    }
     public function getThem(){
    	 return view('admin.slide.them');
    }

     public function postThem( Request $rq ){
        $this->validate($rq,[
         'Ten'=>'required'
        ],[
          'Ten.required'=>'bạn chưa nhâp tên slide'
        ]);
    	
    	$sl= new slide;
    	$sl->Ten=$rq->Ten;
    	$sl->Hinh=$rq->Hinh;
    	$sl->NoiDung=$rq->NoiDung;
    	$sl->link=$rq->link;
    	$sl->save();

    	return redirect('admin/slide/them')->with('thongbao','thêm slide thành công');
    }

    public function getSua($id){
      	$slide= slide::find($id);

     	  return view('admin.slide.sua',['slide'=>$slide]);
    	
    }
      public function postSua(Request $rq,$id){
      	$slide= slide::find($id);
      	$this->validate($rq,[
          'Ten'=>'required|unique:slide,Ten|min:3'
      	
      	],[
          'Ten.required'=>'bạn chưa nhập tên',
           'Ten.unique'=>'tên trùng tên cũ',
           'Ten.min'=>'tên quá ngắn'
      	]);

        $slide->Ten=$rq->Ten;
    	$slide->Hinh=$rq->Hinh;
    	$slide->NoiDung=$rq->NoiDung;
    	$slide->link=$rq->link;
    	$slide->save();

    	return redirect('admin/slide/sua/'.$id)->with('thongbao','sửa thành công');
    	
    }
      public function getXoa($id){
         	$slide= slide::find($id);
      		$slide->delete();
         
     	  return redirect('admin/slide/danhsach')->with('thongbao','xóa thành công');
    	
    	
    }
}