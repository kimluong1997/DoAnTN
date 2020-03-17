<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhacungcap extends Model
{
     protected $table="nhacungcap";
     
      public function sanpham(){
    	return $this->belongsTo('App\sanpham','id_sp','id');
    }

    
}
