<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon.png?v=1">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=1">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=1">
        <link rel="manifest" href="/site.webmanifest?v=1">
        <link rel="mask-icon" href="/safari-pinned-tab.svg?v=1" color="#5bbad5">
        <link rel="shortcut icon" href="/favicon.ico?v=1">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        @if ($title ?? '')
            <title>{{ config('app.name') }} - {{ $title ?? '' }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <link rel="stylesheet" href="{{ mix('css/app.css', config('app.manifest_path')) }}">

    </head>
    <body class="antialiased bg-gray-700 text-white">
        <nav class="container mx-auto py-4 uppercase">
            <ul class="flex justify-between space-x-10">
                <li><a class="text-xl" href="#">Home</a></li>
                <li class="flex-1"></li>
                <li><a class="text-xl" href="#">About</a></li>
                <li><a class="text-xl" href="#">Contact</a></li>
            </ul>
        </nav>
        <main class="container mx-auto">
            @yield('content')
        </main>
        <script src="{{ mix('js/app.js', config('app.manifest_path')) }}"></script>
    </body>
</html>
