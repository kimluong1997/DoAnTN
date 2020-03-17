<?php

use Illuminate\Database\Seeder;

class sanphamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sanpham')->insert([
         ['id_loaisp' => '1','TenSP' => 'lốp maxxi 3D','DonGia' => '300000','MoTa' => 'tot','img' => 'lopmaxxi.jpg','DVTinh' => 'Cái'],['id_loaisp' => '1','TenSP' => 'vành dmax','DonGia' => '100000','MoTa' => 'tot','img' => 'vanhdmax.jpg','DVTinh' => 'Cái']
        	
    	]);
    }
}
