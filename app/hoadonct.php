<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoadonct extends Model
{
     protected $table="hoadonct";

      public function sanpham(){
    	return $this->belongsTo('App\sanpham','id_sanpham','id');
    }
     public function hoadon(){
    	return $this->belongsTo('App\hoadon','id_hoadon','id');
    }
}
