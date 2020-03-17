<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hoadon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoadon', function ($table) {
            $table->increments('id');
              $table->integer('id_khachhang')->unsigned();
             $table->foreign('id_khachhang')->references('id')->on('khachhang');
            $table->string('NgayDatHang');
             $table->integer('TongTien');
            $table->string('HinhThucTT');
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
         Schema::drop('hoadon');
    }
}
