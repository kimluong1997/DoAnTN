<?php

use Illuminate\Database\Seeder;

class loaispSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('loaisp')->insert([
         ['TenSP' => 'Căm','MoTa' => 'Made in Thailan','img' => 'cam1.jpg'],
          ['TenSP' => 'Dây dầu','MoTa' => 'Made in USA','img' => 'daydau1.jpg'],
           ['TenSP' => 'Heo thắng','MoTa' => 'Made in Thailanr','img' => 'heothang1.jpg'],

        	
    	]);
    }
}
