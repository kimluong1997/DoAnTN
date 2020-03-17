<?php

use Illuminate\Database\Seeder;

class slide extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('slide')->insert([
         ['Ten' => 'anh1','Hinh' => 'banner1.jpg','NoiDung' => 'gtXe','link' => '2banh.vn'],
          ['Ten' => 'anh2','Hinh' => 'banner2.jpg','NoiDung' => 'gtXe','link' => '2banh.vn'],
          ['Ten' => 'anh3','Hinh' => 'banner3.jpg','NoiDung' => 'gtXe','link' => '2banh.vn'],
          ['Ten' => 'anh4','Hinh' => 'banner2.jpg','NoiDung' => 'gtXe','link' => '2banh.vn'],
          ['Ten' => 'anh5','Hinh' => 'banner3.jpg','NoiDung' => 'gtXe','link' => '2banh.vn']]);
    }
}
