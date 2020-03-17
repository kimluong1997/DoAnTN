<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTTPN extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('TTPN', function ($table) {
            $table->increments('id');
             $table->integer('id_nhacungcap')->unsigned();
            $table->foreign('id_nhacungcap')->references('id')->on('nhacungcap');
            $table->integer('GiaNhap');
            $table->integer('SoLuongNhap');
           
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
