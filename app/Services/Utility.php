<?php

namespace App\Services;

class Utility
{
    /**
     * お気に入り曲であるか
     *
     * @param int $id
     * @return string お気に入りの場合、on
     */
    public static function favTrack($trackId)
    {
        foreach (auth()->user()->favorite as $f) {
            // お気に入り曲の場合
            if ($f->song->track_id === $trackId) {
                return 'on';
            }
        }

        return '';
    }
}
