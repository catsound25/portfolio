<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserDetailController extends Controller
{
    /**
     * 初期表示
     *
     * @param $id
     * @param Request $req
     * @return \Illuminate\Contracts\View\View
     */
    public function index($id, Request $req)
    {
        $user = User::find($id);

        return view('user-detail', compact('user'));
    }

    /**
     * プロフィール編集
     *
     * @param $id
     * @param Request $req
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id, Request $req)
    {
        User::find($id)->update([
            'desc' => $req->profile,
        ]);

        return redirect()
            ->route('user_detail', ['id' => auth()->user()->id])
            ->with(['suc_msg' => 'プロフィールを更新しました。']);
    }
}
