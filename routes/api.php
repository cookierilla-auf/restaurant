<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\MenuProductsController;

Route::apiResource('products', ProductsController::class);
Route::apiResource('menuproducts', MenuProductsController::class);
Route::apiResource('menu', MenusController::class);