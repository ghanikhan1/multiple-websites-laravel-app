<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Multi Websites Title' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Multi Websites Description' }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    @vite(['resources/sass/fylo.scss', 'resources/js/fylo.js'])
</head>
<body class="dark:bg-darkBlue dark:text-white text-center">
<nav class="p-6 bg-black text-white">
    <a href="{{ url('/') }}" class="text-lg font-bold">Home</a>
</nav>
<x-header.fylo />
<main class="container mx-auto mt-10">
    {{ $slot }}
</main>
<x-footer.fylo />
</body>
</html>
