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

    public function store()
    {
        $request = request();
        $data = $request->all();

        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
        ]);

        return redirect()->route('posts.index');
    }

    public function edit($post)
    {
        // $post = Post::where('id',$post)->get()->first();
        //select * from posts where id=1 limit 1;
        // $post = Post::where('id',$post)->first();
        // $post = Post::find($post);
        $post = Post::findOrFail($post);
        return view('posts.edit',[
            'post' => $post,
        ]);
    }
}
