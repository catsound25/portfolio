<x-layout>
    <x-slot name="title">
        楽曲検索
    </x-slot>

    <x-slot name="css">
        <link rel="stylesheet" href="{{ asset('css/search_music.css') }}">
    </x-slot>

    <main class="main searchmusic">
        <section class="search">
            <h2 class="heading--sub">曲を検索してみましょう</h2>
            <div class="search__inner">
                <form action="{{ route('search_music.search') }}" method="post">
                    @csrf
                    <input class="search__input" type="text" name="search_txt" placeholder="曲名や曲名のキーワードを入力 ex.炎 真夜中">
                    <button class="search__btn" type="submit">検索</button>
                </form>
            </div>
        </section>
        @isset($tracks)
            <section class="search-result">
                <h2 class="heading--sub">Result</h2>
                <div class="search-result__list">
                    @forelse ($tracks['items'] as $t)
                        <div class="card">
                            <img class="card__img" src="{{ $t['album']['images'][1]['url'] }}" alt=""
                                width="300" height="300" />
                            <p class="card__title">{{ $t['name'] }}</p>
                            <p class="card__artist">
                                @foreach ($t['artists'] as $artist)
                                    {{ $artist['name'] }}
                                @endforeach
                            </p>
                            <button class="card__fav"><img src="/img/star.svg" alt=""></button>
                        </div>
                    @empty
                        <p>該当する曲が見つかりませんでした</p>
                    @endforelse
                </div>
            </section>
        @endisset
    </main>
</x-layout>
