<x-layout>
    <x-slot name="title">
        ユーザー詳細
    </x-slot>

    <x-slot name="css">
        <link rel="stylesheet" href="{{ asset('css/user_detail.css') }}">
    </x-slot>

    <main class="main userdetail">
        <div class="headding__wrapper">
            <h2 class="headding-sub">ユーザー詳細</h2>
        </div>
        <section class="prof">
            <div class="prof_nameinfo">
                <img class="prof_nameinfo__img" src="/img/300x300.png" alt="ユーザー画像" width="300" height="300" />
                <p class="prof_nameinfo__name">ユーザー名</p>
            </div>
            <div class="prof_desc">
                <p class="prof_desc__txt">
                    自己紹介文ああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああああ</p>
                <button class="prof_desc__btn btn"><img src="/img/pen.svg" alt="編集"></button>
            </div>
        </section>
        <section class="graph">
            <p>test</p>
        </section>
        <section class="favs">
            <div class="card">
                <img class="card__img" src="/img/300x300.png" alt="アルバム画像" width="300" height="300" />
                <p class="card__title">曲名あああ</p>
                <p class="card__artist">アーティスト名ああああ</p>
                <button class="card__fav"><img src="/img/star.svg" alt=""></button>
            </div>
        </section>
    </main>
</x-layout>
