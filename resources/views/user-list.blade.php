<x-layout>
    <x-slot name="title">
        ユーザー一覧
    </x-slot>

    <x-slot name="css">
        <link rel="stylesheet" href="{{ asset('css/user_list.css') }}">
    </x-slot>

    <main class="main userlist">
        <h2>ユーザー一覧</h2>
        <section class="list">
            @for ($i = 0; $i < 10; $i++)
                <div class="list__item">
                    <div class="prof">
                        <div class="prof_nameinfo">
                            <a href="{{ route('user_detail') }}" class="user__detailbtn">
                                <img class="prof_nameinfo__img" src="/img/300x300.png" alt="ユーザー画像" width="300"
                                    height="300" />
                                <p class="prof_nameinfo__name">ユーザー名</p>
                            </a>
                        </div>
                        <div class="prof_desc">
                            <p class="prof_desc__txt">自己紹介文ああああああああああああああああああああああああああああああああ</p>
                        </div>
                    </div>
                </div>
            @endfor
        </section>
    </main>
</x-layout>
