<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('sanpham', function ($table) {
            $table->increments('id');
              $table->integer('id_loaisp')->unsigned();
             $table->foreign('id_loaisp')->references('id')->on('loaisp');
            $table->string('TenSP');
             $table->integer('DonGia');
            $table->string('MoTa');
              $table->string('img');
            $table->string('DVTinh');
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
      Schema::drop('sanpham');  
    }
}
