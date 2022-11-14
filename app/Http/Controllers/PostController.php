<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show($postId)
    {
        $post = Post::find($postId);

        return view('post', compact('post'));
    }
}
