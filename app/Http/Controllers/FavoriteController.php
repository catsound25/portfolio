<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Song;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spotify;

class FavoriteController extends Controller
{
    /**
     * お気に入り登録
     *
     * @param $id
     * @param Request $req
     * @return void
     */
    public function regist($id, Request $req)
    {
        // 楽曲情報取得
        $track = Spotify::track($id)->get();

        // アーティスト名
        $artists = [];
        foreach ($track['artists'] as $v) {
            $artists[] = $v['name'];
        }

        // 楽曲登録
        $song = Song::all()->where('track_id', $id)->first();
        if (!isset($song)) {
            $song = Song::create([
                'track_id' => $id,
                'title' => $track['name'],
                'artist' => implode(' ', $artists),
            ]);
        }

        // お気に入り登録
        Favorite::create([
            'song_id' => $song->id,
            'user_id' => auth()->user()->id,
        ]);

        return response('ok');
    }

    /**
     * お気に入り解除
     *
     * @param $id
     * @param Request $req
     * @return void
     */
    public function delete($id, Request $req)
    {
        return response('ok');
    }
}
