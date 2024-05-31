<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Stores;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Validation\Rules\File;

class StoresController extends Controller
{
    public function getShops(Request $request)
    {
        $notFound = '';
        $category = (int) $request->query('category');
        try {
            if (filter_var($category,FILTER_VALIDATE_INT)) {
                $stores = Stores::with(['user', 'catalogs'])
                    ->whereHas('catalogs', function ($query) use ($category) {
                        $query->where('category_id', $category);
                    })
                    ->withCount(['catalogs as products_count' => function ($query) use ($category) {
                        $query->where('category_id', $category);
                    }])
                    ->orderBy('products_count', 'desc')
                    ->get();

                    if($stores->isEmpty()){
                        $notFound = [
                            'isNotFound' => true,
                            'message' => 'Stores not found'
                        ];
                    }
            }
            else {
                $stores = Stores::with(['user', 'catalogs'])->get();
            }

            $categories = Categories::all();
            return view('products.shops', compact('stores', 'categories','notFound'));
        } catch (Exception $err) {
            echo ($err);
        }
    }


    public function getStores()
    {
        return view('products.stores');
    }

    public function createStore(Request $request)
    {
        $request->validate([
            'name' => 'required|min:8',
            'description' => 'required|min:20',
            'fromDate' => 'required',
            'toDate' => 'required',
            'image' => [
                'required',
                'file',
                File::types(['jpg', 'png', 'jpeg'])->max(5 * 1024)
            ]
        ]);
        try {

            $file = $request->file('image');
            $original_name = $file->getClientOriginalName();
            $file_name = time() . '_' . $original_name;

            Stores::create([
                'name' => $request->name,
                'user_id' => $request->user_id,
                'description' => $request->description,
                'from_date' => $request->fromDate,
                'to_date' => $request->toDate,
                'image' => $file_name
            ]);

            $file->storeAs('public/img/uploads/profile', $file_name);

            return redirect()->route('users.catalogs')->with('isSucces', 'Store has been created');
        } catch (QueryException $err) {
            dd($err);
        }
    }
}
