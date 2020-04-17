<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class ArchiController extends Controller
{
    public function index() {
        $archi = Posts::where('id_post_categories', 5)->get();
        return view('archi', compact('archi'));
    }

    public function show($archi) {
        $archi = Posts::where('slug', $archi)->firstOrFail();
        
        return view('post', compact('archi'));
    }
}
