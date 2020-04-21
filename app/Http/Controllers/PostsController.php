<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        return view('post');
    }

    
    public function show($post) {
        $posts = Posts::where('slug', $post)->firstOrFail();
        
        return view('post', compact('posts'));
    }
}
