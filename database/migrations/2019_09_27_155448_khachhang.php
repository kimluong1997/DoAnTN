<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Khachhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('khachhang', function ($table) {
            $table->increments('id');
            $table->string('HoTen');
            $table->string('GioiTinh');
             $table->string('Email');
            $table->string('DiaChi');
             $table->integer('DienThoai');
            $table->string('GhiChu');
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
         Schema::drop('khachhang');
    }
}
