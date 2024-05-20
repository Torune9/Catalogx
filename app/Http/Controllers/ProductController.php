<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

class ProductController extends Controller
{

    public function getProducts()
    {
         try{
             $products = Product::orderBy('updated_at','desc')->get();
             return view('user.catalogs',compact('products'));
         }catch(QueryException $err){
            return view('user.catalogs')->with('isNullProd',false);
         }
    }

    public function createProduct(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => [
                'required',
                'image',
                File::types(['jpg', 'png', 'jpeg'])->max(5 * 1024)
            ],
            'stock' => 'required',
            'price' => 'required',
            'userId' => 'required',
            'categoryId' => 'required',
            'description' => 'required|min:20'
        ]);
    
        
        if ($validator->fails()) {
            return redirect('/users/profile/catalogs')->withErrors($validator);
        }
    
        $file = $request->file('image');
        $original_name = $file->getClientOriginalName();
        $file_name = time() . '_' . $original_name;

        try {
            Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'stock' => $request->stock,
                'image' => $file_name,
                'description' => $request->description,
                'user_id' => $request->input('userId'),
                'category_id' => $request->categoryId
            ]);

            $file->storeAs('public/img/uploads', $file_name);

            return redirect('/users/profile/catalogs')->with('success-info','Product berhasil ditambahkan');
        } catch (QueryException $err) {
            dd($err);
        }
    }
    public function showUpdateProduct(Request $request)
    {
        $id = $request->route('id');
        $detail_product = Product::find($id);
        return view('products.catalogUpdate',compact('detail_product'));

    }
}
