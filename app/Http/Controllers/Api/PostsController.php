<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Resources\PostResource;
use App\Http\Requests\Post\StorePostRequest;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);
        return PostResource::collection($posts);
    }

    public function show($post)
    {
        $post = Post::findOrFail($post);
        return new PostResource($post);
    }

    public function store(StorePostRequest $request)
    {
        Post::create($request->all());

        return response()->json([
            'message' => 'Post Created Successfully'
        ],201);
    }
}
