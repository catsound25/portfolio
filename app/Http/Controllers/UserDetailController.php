<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    //
    public function index(Request $req)
    {    
        return view('user-detail');
    }
}
