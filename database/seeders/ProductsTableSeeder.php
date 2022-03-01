<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i =0; $i < 10; $i++){
            DB::table('products')->insert(
                [
                    'title'=>"Apple Iphone $i",
                    'price'=>rand(500,2300),
                    'description' => "New phone with furious power",
                    'in_stock' => 1,
                ]
            );
        }
    }
}
