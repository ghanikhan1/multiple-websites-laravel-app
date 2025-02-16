
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shortly Landing Page</title>

    @vite(['resources/sass/shortly.scss', 'resources/js/shortly.js'])
</head>
<body class="bg-gray-50 text-gray-900">
<nav class="p-6 bg-gray-900 text-white text-center">
    <a href="{{ url('/') }}" class="text-lg font-bold text-center">Home</a>
</nav>
<x-header.shortly />
<main class="container mx-auto mt-10">
    {{ $slot }}
</main>
<x-footer.shortly />
</body>
</html>
