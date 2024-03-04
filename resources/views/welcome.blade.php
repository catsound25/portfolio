@extends('layouts.frame')

@section('title', 'top')

@section('content')
    <h1>トップ</h1>
    <hr class="col-4 mb-5">

    <section class="menu">
        <div>
            <h2>ポートフォリオ</h2>
            <ul class="icon-list ps-0">
                <li class="d-flex align-items-start mb-1"><a href="{{ route('search_music') }}">Spotify楽曲検索</a>
                </li>
            </ul>
        </div>
    </section>
@endsection
