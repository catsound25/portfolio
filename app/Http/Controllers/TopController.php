<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    /**
     * 初期表示
     *
     * @param Request $req
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $req)
    {
        return view('welcome');
    }
}
