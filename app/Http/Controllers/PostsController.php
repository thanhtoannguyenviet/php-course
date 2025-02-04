<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostsController extends Controller
{
    public function index()
    {
        $posts = DB::select('select * from posts');
        return view('posts.index',[
            'posts' => $posts
        ]);
    }

    public function detail($id)
    {
        // $post = DB::select('select * from posts where id = ?', [$id]);
        $post = DB::table('posts')->where('id', $id)->first();
        return view('posts.detail',[
            'post' => $post
        ]);
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $email = $request->input('email');
        DB::insert('insert into posts (title, content, email) values (?, ?,?)', [$title, $content, $email]);
        return redirect('/posts');
    }
}
