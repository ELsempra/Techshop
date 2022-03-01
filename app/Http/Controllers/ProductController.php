<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($cat,$product_id)
    {
        $products = Product::all()->take(5);
        return view('products.show',[
            'products'=>$products,
        ]);
    }
}
