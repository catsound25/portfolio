<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'track_id',
        'title',
        'artist',
    ];

    // 関連テーブル
    public function favorite()
    {
        return $this->hasMany('App\Models\Favorite');
    }
}
