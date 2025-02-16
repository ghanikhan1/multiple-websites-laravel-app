<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fylo Landing Page</title>

    @vite(['resources/sass/fylo.scss', 'resources/js/fylo.js'])
</head>
<body class="dark:bg-darkBlue dark:text-white font-opensans text-center">
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
