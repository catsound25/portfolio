<x-layout>
    <x-slot name="title">
        ユーザー一覧
    </x-slot>

    <x-slot name="css">
        <link rel="stylesheet" href="{{ asset('css/user_list.css') }}">
    </x-slot>

    <main class="main userlist">
        <h2 class="heading--sub">ユーザー一覧</h2>
        <section class="list">
            @foreach ($users as $u)
                <div class="list__item">
                    <div class="prof">
                        <div class="prof_nameinfo">
                            <a href="{{ route('user_detail', ['id' => $u->id]) }}" class="user__detailbtn">
                                <img class="prof_nameinfo__img" src="/img/user{{ $u->id }}.png" alt="ユーザー画像"
                                    width="300" height="300" />
                                <p class="prof_nameinfo__name">{{ $u->name }}</p>
                            </a>
                        </div>
                        <div class="prof_desc">
                            <p class="prof_desc__txt">{{ $u->desc }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    </main>
</x-layout>
