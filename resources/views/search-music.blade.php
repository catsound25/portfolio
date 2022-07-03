<x-layout>
    <x-slot name="title">
        楽曲検索
    </x-slot>

    <x-slot name="css">
        <link rel="stylesheet" href="{{ asset('css/search_music.css') }}">
    </x-slot>

    <main class="main searchmusic">
        <section class="search">
            <h2 class="heading--sub">曲を検索</h2>
            <div class="search__inner">
                <input class="search__input" type="text" name="search_txt" placeholder="曲名や曲名のキーワードを入力 ex.焔 真夜中">
                <button class="search__btn" type="submit">検索</button>
            </div>
        </section>
        <section class="search-result">
            <h2 class="heading--sub">検索結果</h2>
            <div class="search-result__list">
                @for ($i = 0; $i < 10; $i++)
                    <div class="card">
                        <img class="card__img" src="/img/300x300.png" alt="アルバム画像" width="300" height="300" />
                        <p class="card__title">曲名あああ</p>
                        <p class="card__artist">アーティスト名ああああ</p>
                        <button class="card__fav"><img src="/img/star.svg" alt=""></button>
                    </div>
                @endfor
            </div>
        </section>
    </main>
</x-layout>
