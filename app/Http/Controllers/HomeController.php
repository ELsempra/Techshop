<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController
{
    public function index(){
        $products = Product::orderBy('created_at')->take(3)->get();

        return view('home.index',[
            'products'=>$products
        ]);
    }
}
