<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'index'])->name('index');
Route::get('/about', [PageController::class,'about'])->name('about');


Route::get('/products', [ProductsController::class,'index'])->name('products.index');

Route::get('/products/{id}', [ProductsController::class,'detail'])
    ->where('id', '[0-9]+')
    ->name('products.detail');