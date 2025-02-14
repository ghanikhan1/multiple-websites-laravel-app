<header class="bg-white text-black p-4 fixed top-0 left-0 w-full z-50 bg-gray-200 h-20">
    <div class="max-w-[1440px] mx-auto lg:px-8 flex justify-between items-center">
        <h1 class="text-3xl font-semibold">
            <a href="{{ url('/') }}">Home</a>
        </h1>

        <!-- Desktop Navigation -->
        <nav class="flex items-center space-x-4">
            <x-nav-link url="/fylo" :active="request()->is('fylo')">Fylo</x-nav-link>
            <x-nav-link url="/loopstudios" :active="request()->is('loopstudios')">Loopstudios</x-nav-link>
            <x-nav-link url="/shortly" :active="request()->is('shortly')">Shortly</x-nav-link>
        </nav>
    </div>
</header>
