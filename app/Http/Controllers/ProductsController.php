<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $name = 'Toan';
        return view('products.index', compact('name'));
    }
    public function detail($id)
    {
        return view('products.detail', compact('id'));
    }

}
