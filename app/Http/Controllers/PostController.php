<?php

namespace App\Http\Controllers;

use App\Models\post;

class PostController extends Controller
{
    public function tampil()
    {
        $posts = Post::all();

        return view('posts/index', compact('posts'));

    }
    public function show($id)
    {
        $posts = Post::FindOrFail($id);
        return view('posts/show', compact('posts'));
    }
}
