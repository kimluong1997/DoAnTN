<?php

use Illuminate\Database\Seeder;

class hoadonctSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hoadonCT')->insert([
         ['id_hoadon' => '1','id_sanpham' => '2','SoLuong' => '30','DonGia' => '30000']
        	
    	]);
    }
}
