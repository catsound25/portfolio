<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = [
        'song_id',
        'user_id',
    ];


    // 関連テーブル
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function song()
    {
        return $this->belongsTo('App\Models\Song', 'song_id');
    }
}
