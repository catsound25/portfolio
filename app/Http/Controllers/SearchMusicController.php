<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spotify;

class SearchMusicController extends Controller
{
    /**
     * 初期表示
     *
     * @param Request $req
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $req)
    {
        return view('search-music');
    }

    /**
     * 曲を検索
     *
     * @param Request $req
     * @return \Illuminate\Contracts\View\View
     */
    public function search(Request $req)
    {
        $tracks = Spotify::searchTracks($req->search_txt)->get('tracks');

        return view('search-music', compact('tracks'));
    }
}
