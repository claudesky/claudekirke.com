<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-L1BW55E00Q"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-L1BW55E00Q');
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:title" content="Claude Kirke">
        <meta property="og:type" content="profile">
        <meta property="og:url" content="https://claudekirke.com/">
        <meta property="og:image" content="https://claudekirke.com/img/claude_kirke.jpg">
        <meta property="og:description" content="I am a full-stack developer. Laravel, Vue, Linux, Docker, and Git are my best friends! Check out what I can do in my portfolio.">

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

        <meta name="description" content="I am a full-stack developer. Laravel, Vue, Linux, Docker, and Git are my best friends! Check out what I can do in my portfolio.">

        <link rel="stylesheet" href="{{ mix('css/app.css', config('app.manifest_path')) }}">

    </head>
    <body class="min-h-screen antialiased bg-gray-700 text-white flex flex-col">
        <nav class="container mx-auto py-4 uppercase">
            <ul class="flex justify-between space-x-10 px-4">
                <li><a class="lg:text-lg" href="#">Home</a></li>
                <li class="flex-1"></li>
                <li><a class="lg:text-lg" href="#">About</a></li>
                <li><a class="lg:text-lg" href="#">Contact</a></li>
            </ul>
        </nav>
        <main class="container mx-auto">
            @yield('content')
        </main>
        <div class="flex-grow"></div>
        <footer class="text-sm text-gray-300 container mx-auto p-4 pb-8 flex flex-col space-y-4 2xl:space-y-8">
            <div class="flex justify-center space-x-4 lg:space-x-8">
                <a href="{{ route('terms') }}">Terms of Service</a>
                <a href="{{ route('privacy') }}">Privacy Policy</a>
            </div>
            <div class="text-gray-400 flex justify-center">
                <small>
                    Copyright &copy; 2021 - Claude Kirke - All Rights Reserved
                </small>
            </div>
        </footer>
        <script src="{{ mix('js/app.js', config('app.manifest_path')) }}"></script>
    </body>
</html>
