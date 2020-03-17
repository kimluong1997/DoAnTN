<?php

use Illuminate\Database\Seeder;

class khachhangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('khachhang')->insert([
 ['HoTen' => 'Nguyen Kim Luong 2','GioiTinh' => 'nam','Email' => 'NguyenKimLuong97@gmail.com','DiaChi' => 'Vinh-Nghe_An','DienThoai' => '097876646','GhiChu' => 'VIP']
        	
    	]);
    }
}


