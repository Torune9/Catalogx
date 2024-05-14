<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function getCatalogs(){
        return view('user.catalogs');
    }
}
