<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class HomeController extends Controller
{
    public function index() {
        $topstory = Posts::all();
        $story = Posts::all()->get(1);
        $archi = Posts::where('id_post_categories', 5)->get();
        $decor = Posts::where('id_post_categories', 6)->get();
        return view ('home', compact('topstory', 'story', 'archi', 'decor'));
    }

    public function show() {
        
    }
}
