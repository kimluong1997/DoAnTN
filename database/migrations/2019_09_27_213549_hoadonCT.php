<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HoadonCT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('hoadonCT', function ($table) {
            $table->increments('id');
              $table->integer('id_hoadon')->unsigned();
             $table->foreign('id_hoadon')->references('id')->on('hoadon');
              $table->integer('id_sanpham')->unsigned();
             $table->foreign('id_sanpham')->references('id')->on('sanpham');
            $table->integer('SoLuong');
             $table->integer('DonGia');
           
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hoadonCT');  
    }
}
