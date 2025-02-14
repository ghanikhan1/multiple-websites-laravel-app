<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? config('app.name', 'Home') }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Welcome to Home' }}">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Vite Assets -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Stack for additional styles -->
    @stack('styles')
</head>
<body class="font-sans antialiased">
<header>
    <x-navigation />
</header>

<main class="min-h-screen">
    {{ $slot }}
</main>

<!-- Livewire Scripts -->
@livewireScripts

<!-- Stack for additional scripts -->
@stack('scripts')
</body>
</html>
