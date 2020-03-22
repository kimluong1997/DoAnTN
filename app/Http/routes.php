<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return view('welcome');
});


Route::get('index','PageController@getIndex')->name('trangchu');


Route::get('loaisanpham/{type}','PageController@getloaisanpham')->name('loaisanpham');

Route::get('loaisp','PageController@getloaisp')->name('loaisp');


Route::get('chitietsanpham/{id}','PageController@getchitietsanpham')->name('chitietsanpham');


Route::get('lienhe','PageController@getlienhe')->name('lienhe');
Route::get('gioithieu','PageController@getgioithieu')->name('gioithieu');

Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getAddtoCart'
]);



Route::get('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@getCheckout'
]);
Route::post('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@postCheckout'
]);

Route::get('dangnhap','PageController@getLogin')->name('dangnhap');
Route::post('dangnhap','PageController@postLogin')->name('dangnhap');

Route::get('dangxuat','PageController@postLogout')->name('dangxuat');

Route::get('dangki','PageController@getSignin')->name('dangki');
Route::post('dangki','PageController@postSignin')->name('dangki');

Route::get('seach','PageController@getSeach')->name('seach');

//admin

Route::get('admin',function(){

	return view('admin.loaisp.danhsach');
});

Route::get('admin/dangnhap','userController@getdangnhapAdmin');
Route::post('admin/dangnhap','userController@postdangnhapAdmin');
Route::get('admin/logout','userController@getLogoutAdmin');


Route::get('A1',function(){
  return view('adminQL.loaisp.danhsach');
});

//Route::get('admin',function(){
 // return view('admin/master');
//})->name('master');

Route::get('admin','masterController@getmaster')->name('master');
Route::get('thongke','thongkeController@getthongke')->name('thongke');


Route::group(['prefix'=>'admin','middleware'=>'AdminLogin'],function(){
  
  Route::group(['prefix'=>'loaisp'],function(){

    Route::get('danhsach','loaispController@getDanhsach');

    Route::get('sua/{id}','loaispController@getSua');
    Route::post('sua/{id}','loaispController@postSua');

    Route::get('them','loaispController@getThem');
    Route::post('them','loaispController@postThem');

    Route::get('xoa/{id}','loaispController@getXoa');

    
    

  });

  Route::group(['prefix'=>'sanpham'],function(){

    Route::get('danhsach','sanphamController@getDanhsach');

    Route::get('sua/{id}','sanphamController@getSua');
    Route::post('sua/{id}','sanphamController@postSua');

    Route::get('them','sanphamController@getThem');
    Route::post('them','sanphamController@postThem');

    Route::get('xoa/{id}','sanphamController@getXoa');

    
    

  });
  

  Route::group(['prefix'=>'slide'],function(){

    Route::get('danhsach','slideController@getDanhsach');

    Route::get('sua/{id}','slideController@getSua');
    Route::post('sua/{id}','slideController@postSua');


    Route::get('them','slideController@getThem');
    Route::post('them','slideController@postThem');

    Route::get('xoa/{id}','slideController@getXoa');
    
    

  });

  Route::group(['prefix'=>'khachhang'],function(){

    Route::get('danhsach','khachhangController@getDanhsach');

    Route::get('sua/{id}','khachhangController@getSua');
    Route::post('sua/{id}','khachhangController@postSua');

    Route::get('them','khachhangController@getThem');
    Route::post('them','khachhangController@postThem');

    Route::get('xoa/{id}','khachhangController@getXoa');

  });

  Route::group(['prefix'=>'hoadon'],function(){

    Route::get('danhsach','hoadonController@getDanhsach');

    Route::get('sua/{id}','hoadonController@getSua');
    Route::post('sua/{id}','hoadonController@postSua');
    
    Route::get('them','hoadonController@getThem');
    Route::post('them','hoadonController@postThem');

    Route::get('xoa/{id}','hoadonController@getXoa');

  });
  Route::group(['prefix'=>'hoadonct'],function(){

    Route::get('danhsach','hoadonctController@getDanhsach');

    Route::get('sua/{id}','hoadonctController@getSua');
    Route::post('sua/{id}','hoadonctController@postSua');
    
    Route::get('them','hoadonctController@getThem');
    Route::post('them','hoadonctController@postThem');

    Route::get('xoa/{id}','hoadonctController@getXoa');

  });
  Route::group(['prefix'=>'nhacungcap'],function(){

    Route::get('danhsach','nhaccController@getDanhsach');

    Route::get('sua/{id}','nhaccController@getSua');
    Route::post('sua/{id}','nhaccController@postSua');
    
    Route::get('them','nhaccController@getThem');
    Route::post('them','nhaccController@postThem');

    Route::get('xoa/{id}','nhaccController@getXoa');

  });


  Route::group(['prefix'=>'user'],function(){
   

    Route::get('danhsach','userController@getDanhsach');

    Route::get('sua/{id}','userController@getSua');
    Route::post('sua/{id}','userController@postSua');

    Route::get('them','userController@getThem');
    Route::post('them','userController@postThem');

    Route::get('xoa/{id}','userController@getXoa');
    

  });
});



