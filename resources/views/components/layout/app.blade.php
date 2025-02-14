<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Alata&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet"
    />

    <title>Multiple Landing Page</title>

    @if (Request::is('fylo'))
        @vite(['resources/sass/fylo.scss', 'resources/js/fylo.js'])
    @elseif (Request::is('loopstudio'))
        @vite(['resources/sass/loopstudio.scss', 'resources/js/loopstudio.js'])
    @elseif (Request::is('shortly'))
        @vite(['resources/sass/shortly.scss', 'resources/js/shortly.js'])
    @elseif (Request::is('home'))
        @vite(['resources/sass/home.scss', 'resources/js/home.js'])
    @endif
</head>
<body class="dark:bg-darkBlue dark:text-white font-opensans">
<div class="flex justify-between items-center p-6">
    <a href="{{ url('home') }}" class="font-bold text-xl"> Home </a>
    <div class="flex justify-between p-6 text-lg font-bold space-x-6">
        <a href="{{ url('fylo') }}"> Fylo </a>
        <a href="{{ url('loopstudio') }}"> LoopStudio </a>
        <a href="{{ url('shortly') }}"> Shortly </a>
    </div>
</div>

{{ $slot }}
</body>
</html>
