<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhacungcap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacungcap', function ($table) {
            $table->increments('id');
             $table->integer('id_loaisp')->unsigned();
            $table->foreign('id_loaisp')->references('id')->on('loaisp');
            $table->string('Ten NCC');
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
        //
    }
}
