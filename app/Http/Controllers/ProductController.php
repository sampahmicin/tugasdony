<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function select($slug){
        $product=Product::where('slug', '=', $slug)->first();
        if($product)
            return response()->view('product',['product' => $product]);

    }
}
