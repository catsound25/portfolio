@extends('layouts.frame')

@section('title','aiue')

@section('content')
<h1>自己紹介</h1>

<a href="#">私の好きな音楽(ポートフォリオサイトの1画面に飛びます)</a>
<p class="fs-5 col-md-8">
    
</p>

<hr class="col-3 col-md-2 mb-5">

<div class="row g-5">
    <div class="col-md-6">
        <h2>ポートフォリオ</h2>
        <p>作成した作品です。</p>
        <ul class="icon-list ps-0">
        <li class="d-flex align-items-start mb-1"><a href="../getting-started/contribute">Spotify情報共有サイト</a></li>
        </ul>
    </div>
    <div class="col-md-6">
        <h2>活動</h2>
        <ul class="icon-list ps-0">
        <li class="d-flex align-items-start mb-1"><a href="https://qiita.com/catsound2020">qiita</a></li>
        <li class="d-flex align-items-start mb-1"><a href="https://github.com/catsound25">Github</a></li>
        </ul>
    </div>
</div>

@endsection
