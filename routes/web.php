<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/products', [ProductsController::class,'index'])->name('products.index');

Route::get('/products/{id}', [ProductsController::class,'detail'])
    ->where('id', '[0-9]+')
    ->name('products.detail');