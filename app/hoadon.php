<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadon extends Model
{
    protected $table="hoadon";

     public function hoadonct(){
    	return $this->hasMany('App\hoadonct','id_hoadon','id');
    }
     public function khachhang(){
    	return $this->belongsTo('App\khachhang','id_khachhang','id');
    }

}
