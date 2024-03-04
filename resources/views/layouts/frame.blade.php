    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        {{-- 共通のスタイル --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- 共通のJS --}}
        <script src="{{ mix('js/app.js') }}"></script>
    </head>

    <body>
        <div>
            {{-- ヘッダー --}}
            <header class="p-2 mb-5 header">
                <a href="{{ route('top') }}" class="d-flex align-items-center text-dark text-decoration-none">
                    <span class="fs-4 text-white">My Web Site</span>
                </a>
            </header>

            {{-- メインコンテンツ --}}
            <main>
                @yield('content')
            </main>

            {{-- フッター --}}
            <footer class="p-2 text-muted footer">
                Copyright&copy; catsound25. All Rights Reserved.
            </footer>
        </div>
    </body>

    </html>
