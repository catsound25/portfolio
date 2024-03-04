<x-layout>
    <x-slot name="title">
        楽曲検索
    </x-slot>

    <x-slot name="css">
        <link rel="stylesheet" href="{{ asset('css/search_music.css') }}">
    </x-slot>

    <x-slot name="js">
        <script src="{{ mix('js/app.js') }}"></script>
    </x-slot>

    <main class="main searchmusic">
        {{-- 検索条件 --}}
        <section class="search">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h2 class="heading--sub">曲名や曲名の一部を入力してください</h2>
            <div class="search__inner">
                <form action="{{ route('search_music.search') }}" method="post">
                    @csrf
                    <input class="search__input" type="text" name="search_txt" placeholder="ex.炎 真夜中">
                    <button class="search__btn" type="submit">検索</button>
                </form>
            </div>
        </section>

        {{-- 検索結果 --}}
        @isset($tracks)
            <section class="search-result">
                <div class="search-result__list">
                    @forelse ($tracks['items'] as $t)
                        <div class="card">
                            <img class="card__img" src="{{ $t['album']['images'][1]['url'] }}" alt=""
                                width="300" height="300" />
                            <p class="card__title">{{ $t['name'] }}</p>
                            <p class="card__artist">
                                @foreach ($t['artists'] as $artist)
                                    {{ $artist['name'] . ' ' }}
                                @endforeach
                            </p>
                            @auth
                                <button class="card__fav js-fav {{ Utility::favTrack($t['id']) }}"
                                    data-song-id="{{ $t['id'] }}"></button>
                            @endauth
                        </div>
                    @empty
                        <p>該当する曲が見つかりませんでした</p>
                    @endforelse
                </div>
            </section>
        @endisset
    </main>
</x-layout>
