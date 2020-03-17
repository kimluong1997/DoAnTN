<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(khachhangSeeder::class);
        //  $this->call(hoadonSeeder::class);
          // $this->call(cthoadonSeeder::class);
         // $this->call(loaispSeeder::class);
 //$this->call(sanphamSeeder::class);
  // $this->call(hoadonctSeender::class);
           $this->call(NhaCC_seeder::class);
    }
}


