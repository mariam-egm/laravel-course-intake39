<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Http\Requests\Post\StorePostRequest;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::all()
        ]);
    }

    public function create()
    {
        $users = User::all();
        return view('posts.create',[
            'users' => $users,
        ]);
    }

    public function store(Request $request)
    {
        dd($request->all());
        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        // $post = Post::where('id',$post)->get()->first();
        //select * from posts where id=1 limit 1;
        // $post = Post::where('id',$post)->first();
        // $post = Post::find($post);
        return view('posts.edit', [
            'post' => $post,
        ]);
    }
}
