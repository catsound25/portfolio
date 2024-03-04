<header class="header">
    <div class="header__left">
        <h1 class="header__title">
            <a href="{{ route('search_music') }}"><span class="accent">Spotify</span>楽曲検索</a>
        </h1>
    </div>
    <div class="header__right">
        @auth
            <p class="header__txt">{{ auth()->user()->name }}でログイン中</p>
            <a href="{{ route('auth.logout') }}" class="header__link">ログアウト</a>
        @endauth
        @guest
            <a href="{{ route('auth.login') }}" class="header__link">簡単ログイン</a>
        @endguest
        <a href="{{ route('user_list') }}" class="header__link">ユーザー一覧</a>
    </div>
</header>
