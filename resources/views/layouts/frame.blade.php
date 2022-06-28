<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>catsound25のPortfolio</title>
    {{-- 共通のスタイル --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="col-lg-8 mx-auto p-2">
        <header class="d-flex align-items-center pb-2 mb-5 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <span class="fs-4">catsound25のポートフォリオ</span>
            </a>
        </header>

        {{-- メインコンテンツ --}}
        <main>
            @yield('content')
        </main>

        <footer class="pt-5 my-5 text-muted border-top">
            Copyright&copy; catsound25. All Rights Reserved.
        </footer>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>