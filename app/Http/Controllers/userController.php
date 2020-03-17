<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\user;

class userController extends Controller
{
    public function getDanhsach(){
             $user=User::all();


    return view('admin.user.danhsach',['user'=>$user]);


    }



     public function getThem(){
    	 return view('admin.user.them');
    }

     public function postThem( Request $rq ){
        $this->validate($rq,[
         'name'=>'required'
        ],[
          'name.required'=>'bạn chưa nhâp tên '
        ]);
    	
    	$user= new User;
    	$user->name=$rq->name;
    	$user->Email=$rq->Email;
    	$user->Password=$rq->Password;
    	$user->save();

    	return redirect('admin/user/them')->with('thongbao','thêm thành công');
    }

     public function getSua($id){
      	$user= User::find($id);

     	  return view('admin.user.sua',['user'=>$user]);
    	
    }
      public function postSua(Request $rq,$id){
      	$user= User::find($id);
      	$this->validate($rq,[
          'name'=>'required'
      	
      	],[
          'name.required'=>'bạn chưa nhập tên',
          
      	]);

       $user->name=$rq->name;
    	$user->Email=$rq->Email;
    	$user->Password=$rq->Password;
    	$user->save();

      return redirect('admin/user/sua/'.$id)->with('thongbao','sửa thành công');
    	
    }

      public function getXoa($id){
         	$user= User::find($id);
      		$user->delete();
         
     	  return redirect('admin/user/danhsach')->with('thongbao','xóa thành công');
    	
    	
    }

      public function getdangnhapAdmin(){
        return view('admin.login');

      }
         public function postdangnhapAdmin(Request $rq)
         {
          $this->validate($rq,[
             'email'=>'required', 'password'=>'required'
          ],[
           'email.required'=>'Bạn chưa nhập email',
             'password.required'=>'Bạn chưa nhập password'

          ]);
          if(Auth::attempt(['email'=>$rq->email, 'password'=>$rq->password]))
          {
            return redirect('admin');
          }
          else{
            return redirect('admin/dangnhap')->with('thongbao','Đăng nhập không thành công');
          }

       

      }
       public function getLogoutAdmin(){
         Auth::logout();
        return redirect('admin/dangnhap');

      }



}
