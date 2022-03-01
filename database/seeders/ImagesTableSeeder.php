<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 2;$i < 10; $i++)
        DB::Table('product_images')->insert([
           'img'=>'http s://www.iphones.ru/wp-content/uploads/2014/09/01-iPhone-6-Anounce.jpg',
            'product_id'=>$i,
        ]);
    }
}
