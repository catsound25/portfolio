<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchMusicController extends Controller
{
    //
    public function index(Request $req)
    {    
        return view('search-music');
    }
}