<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class ArchiController extends Controller
{
    public function index() {
        $archi = Posts::where('id_post_categories', 5)->paginate(5);
        return view('archi', compact('archi'));
    }

}
