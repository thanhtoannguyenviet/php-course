<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {   
        $ls = ['PHP', 'Laravel', 'Javascript', 'VueJS'];
        $role = 'admin';
        return view('index')->with([
            'ls' => $ls,
            'role' => $role
        ]);
    }
    public function about()
    {
        return view('about');
    }
}
