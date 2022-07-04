<x-layout>
    <x-slot name="title">
        ユーザー詳細
    </x-slot>

    <x-slot name="css">
        <link rel="stylesheet" href="{{ asset('css/user_detail.css') }}">
    </x-slot>

    <main class="main userdetail">
        <div class="heading__wrapper">
            <h2 class="heading-sub">ユーザー詳細</h2>
            @if (session('suc_msg'))
                <p class="success__txt">{{ session('suc_msg') }}</p>
            @endif
        </div>
        <section class="prof">
            <div class="prof_nameinfo">
                <img class="prof_nameinfo__img" src="/img/user{{ $user->id }}.png" alt="ユーザー画像" width="auto"
                    height="auto" />
                <p class="prof_nameinfo__name">{{ $user->name }}</p>
            </div>
            <div class="prof_desc">
                @if (Auth::check() && $user->id === auth()->user()->id)
                    <form action="{{ route('edit_profile', ['id' => auth()->user()->id]) }}" method="post">
                        @csrf
                        <textarea class="prof_desc__textarea" name="profile" cols="30" rows="10">{{ $user->desc }}</textarea>
                        <button class="prof_desc__btn btn" type="submit"><img src="/img/pen.svg"
                                alt="編集"></button>
                    </form>
                @else
                    <p class="prof_desc__txt">{{ $user->desc }}</p>
                @endif
            </div>
        </section>
        <section class="graph">
            <p>趣向グラフ(未実装)</p>
        </section>
        <section class="favs">
            @forelse ($user->favorite as $f)
                <div class="card">
                    <img class="card__img" src="{{ $f->song->img }}" alt="アルバム画像" width="300" height="300" />
                    <p class="card__title">{{ $f->song->title }}</p>
                    <p class="card__artist">{{ $f->song->artist }}</p>
                </div>
            @empty
            @endforelse
        </section>
    </main>

</x-layout>
