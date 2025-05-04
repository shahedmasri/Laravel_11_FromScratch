<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($postId)
        // public function show(Post $post)
    {
        $post = Post::find($postId);

        return view('post', compact('post'));
    }
}
