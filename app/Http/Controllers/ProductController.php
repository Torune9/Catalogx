<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Exception;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function getProducts(){
        $isNullProd = true;
        try{
            $id = Auth::user()->id;
            $user = User::find($id);
            $store = $user->store;
            $categories = Categories::all();
            
           if ($user->store == null) {
               return view('user.catalogs',[
                   'isNullProd' => !$isNullProd
               ]);
           }
             $products = $store->catalogs()->orderBy('updated_at','desc')->get();
             return view('user.catalogs',compact('products','isNullProd','store','categories'));
         }catch(Exception $err){
            return view('user.catalogs',[
                'isNullProd' => !$isNullProd
            ]);
         }
    }

    public function createProduct(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => [
                'required',
                'image',
                File::types(['jpg', 'png', 'jpeg'])->max(5 * 1024)
            ],
            'stock' => 'required',
            'price' => 'required',
            'storeId' => 'required',
            'categoryId' => 'required',
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
                'store_id' => $request->input('storeId'),
                'category_id' => $request->categoryId
            ]);

            $file->storeAs('public/img/uploads', $file_name);

            return redirect('/users/profile/catalogs')->with('success-info','Product berhasil ditambahkan');
        } catch (QueryException $err) {
            dd($err);
        }
    }

    public function updateProduct(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => [
                'image',
                File::types(['jpg', 'png', 'jpeg'])->max(5 * 1024)
            ],
            'stock' => 'required',
            'price' => 'required',
        ]);

        $id = $request->route('id');
        
        if ($validator->fails()) {
            return redirect('/users/profile/catalogs')->withErrors($validator);
        }
    
        
        try {
            $product = Product::find($id);
            
            $product->name = $request->name;
            $product->stock = $request->stock;
            $product->price = $request->price;
            
            if ($request->file('image') != null) {
                $file = $request->file('image');
                $original_name = $file->getClientOriginalName();
                $file_name = time() . '_' . $original_name;
                $product->image = $file_name;
                $file->storeAs('public/img/uploads', $file_name);
           }
           $product->save();


            return redirect('/users/profile/catalogs')->with('success-info','Product berhasil di update');
        } catch (QueryException $err) {
            dd($err);
        }
    }

    public function deleteProduct(Request $request){
        $id = $request->route('id');
        try {
            $product = Product::find($id);
            $product->delete();
            return redirect('/users/profile/catalogs')->with('success-info','Product berhasil di hapus');
        } catch (Exception $err) {
            dd($err);
        }

    }
    
    public function showUpdateProduct(Request $request){
        $id = $request->route('id');
        $detail_product = Product::find($id);
        return view('products.catalogUpdate',compact('detail_product'));

    }
}
