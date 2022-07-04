<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    /**
     * 初期表示
     *
     * @param Request $req
     * @return void
     */
    public function index(Request $req)
    {
        $users = User::all();
        return view('user-list', compact('users'));
    }
}
