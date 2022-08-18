<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * 簡単ログイン
     *
     * @param  \Illuminate\Http\Request  $req
     * @return \Illuminate\Http\RedirectResponse
     */
    public function easyAuthenticate(Request $req)
    {
        $credentials = [
            'email' => config('const.guest.mail'),
            'password' => config('const.guest.pw')
        ];

        // ログイン
        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return back();
        }

        return back()->withErrors([
            'email' => 'メールアドレスまたパスワードが異なります。',
        ])->onlyInput('email');
    }

    /**
     * ユーザーをアプリケーションからログアウトさせる
     *
     * @param  \Illuminate\Http\Request  $req
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $req)
    {
        // ログアウト
        Auth::logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        // 直前の画面に戻る
        return back();
    }
}
