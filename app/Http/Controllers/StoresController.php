<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stores;
use Illuminate\Validation\Rules\File;

class StoresController extends Controller
{
    public function getShops(){
        return view('products.shops');
    }
    
    public function getStores(){
        return view('products.stores');
    }

    public function createStore(Request $request){
        $request->validate([
            'name'=>'required|min:8',
            'date' => 'required|min:9',
            'image' => [
                'required',
                'image',
                File::types(['jpg', 'png', 'jpeg'])->max(5 * 1024)
            ]
        ]);
        Stores::create([]);
    }
}
