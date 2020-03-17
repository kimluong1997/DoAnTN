<?php

use Illuminate\Database\Seeder;

class NhaCC_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('khachhang')->insert([
             [   
             	'id_loaisp' => '1',
             	'Ten NCC' => 'Nguyen Kim Luong 2',
             	
             	'Email' => 'NguyenKimLuong97@gmail.com',
             	'DiaChi' => 'Vinh-Nghe_An',
             	'DienThoai' => '097876646',
             	'GhiChu' => 'VIP']
        	
    	]);
    }
    }
}
