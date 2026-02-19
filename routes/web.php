<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuProductsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\MenusController;

Route::get('/', function () {
    return view('welcome');});

// Route::resource('menuproducts', MenuProductsController::class);
// Route::resource('products', ProductsController::class);
// Route::resource('menu', MenusController::class);

