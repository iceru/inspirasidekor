<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class DecorController extends Controller
{
    public function index() {
        $decor = Posts::where('id_post_categories', 6)->get();
        return view('decor');
    }

    public function show() {
        
    }
}
