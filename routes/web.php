<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function(){
    return redirect()->route('users.login');
});

Route::name('users.')->group(function(){
    Route::get('/users/login',[UserController::class,'login'])->name('login');
    Route::get('/users/register',[UserController::class,'register'])->name('register');
});

Route::get('/products',[ProductController::class,'getProducts']);

