<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'index'])->name('index');
Route::get('/about', [PageController::class,'about'])->name('about');


Route::get('/products', [ProductsController::class,'index'])->name('products.index');

Route::get('/products/{id}', [ProductsController::class,'detail'])
    ->where('id', '[0-9]+')
    ->name('products.detail');

Route::get('/posts', [PostsController::class,'index'])->name('posts.index');
Route::get('/posts/{id}', [PostsController::class,'detail'])
    ->where('id', '[0-9]+')
    ->name('posts.detail');
Route::get('/posts/create', [PostsController::class,'create'])->name('posts.create');
Route::post('/posts', [PostsController::class,'store'])->name('posts.store');