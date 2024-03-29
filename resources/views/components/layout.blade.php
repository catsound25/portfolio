<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    {{-- JS --}}
    {{ $js ?? '' }}
    {{-- CSS --}}
    {{ $css }}
</head>

<body class="body">
    {{-- ヘッダー --}}
    <x-header></x-header>

    {{-- メインコンテンツ --}}
    {{ $slot }}

    {{-- フッター --}}
    <x-footer></x-footer>
</body>

</html>
