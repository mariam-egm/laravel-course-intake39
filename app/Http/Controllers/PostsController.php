<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index',[
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }
}
