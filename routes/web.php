<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StoresController;

Route::get('/', function(){
    return redirect()->route('users.login');
});

Route::name('users.')->group(function(){
    Route::get('/users/login',[UserController::class,'login'])->name('login');
    Route::get('/users/register',[UserController::class,'register'])->name('register');
    Route::get('/users/profile/username',[UserController::class,'profile'])->name(('profile'));
    Route::get('/users/profile/catalogs',[ProductController::class,'getCatalogs'])->name('catalogs');
});

Route::get('/stores',[StoresController::class,'getStores']);
;


