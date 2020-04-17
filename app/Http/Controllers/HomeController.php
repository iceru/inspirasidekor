<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class HomeController extends Controller
{
    public function index() {
        $topstory = Posts::all();
        return view ('home', compact('topstory'));
    }

    public function show() {
        
    }
}
