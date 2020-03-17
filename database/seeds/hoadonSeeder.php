<?php

use Illuminate\Database\Seeder;

class hoadonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('hoadon')->insert([
         ['id_khachhang' => '1','NgayDatHang' => '20/9/2019','TongTien' => '1000000','HinhThucTT' => 'Truc tiep'], ['id_khachhang' => '1','NgayDatHang' => '20/6/2019','TongTien' => '6000000','HinhThucTT' => 'online'], ['id_khachhang' => '2','NgayDatHang' => '06/9/2019','TongTien' => '9000000','HinhThucTT' => 'Truc tiep']
        	
    	]);
    }
}
