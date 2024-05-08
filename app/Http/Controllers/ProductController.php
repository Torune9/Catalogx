<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getShop(){
        return view('products.shops');
    }
    public function getProducts(){
        return view('products.product');
    }
}
