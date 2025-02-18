<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Landing Pages</title>

    @vite(['resources/sass/home.scss', 'resources/js/home.js'])
</head>
<body class="dark:bg-darkBlue dark:text-white font-opensans">

<main class="container mx-auto">
    {{ $slot }}
</main>

<script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

</body>
</html>
