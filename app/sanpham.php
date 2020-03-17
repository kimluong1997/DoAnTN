<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
     protected $table="sanpham";
      public function loaisanpham(){
    	return $this->belongsTo('App\loaisanpham','id_loaisp','id');
    }

     public function hoadonct(){
    	return $this->hasMany('App\hoadonct','id_sanpham','id');

    }

    public function nhacungcap(){
    	return $this->hasMany('App\nhacungcap','id_sp','id');
    }
}
