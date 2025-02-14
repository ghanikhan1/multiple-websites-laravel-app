<x-layout.home >
<div class="pt-20">
    <div class="container mx-auto px-6 text-center mt-16">
        <h1 class="text-4xl font-bold text-blue-600">Welcome to My Frontend Portfolio</h1>
        <p class="text-lg mt-4 text-gray-700">Here are three different landing pages I built with Laravel, Tailwind CSS, Vite, and SCSS.</p>

        <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6">
            <a href="{{ url('fylo') }}" class="p-6 border rounded-lg hover:bg-blue-100">
                <h2 class="text-2xl font-semibold">Fylo</h2>
                <p class="mt-2 text-gray-600">A sleek cloud storage landing page with dark mode.</p>
            </a>
            <a href="{{ url('loopstudios') }}" class="p-6 border rounded-lg hover:bg-green-100">
                <h2 class="text-2xl font-semibold">LoopStudios Landing Page</h2>
                <p class="mt-2 text-gray-600">A modern digital studio showcase with interactive elements.</p>
            </a>
            <a href="{{ url('shortly') }}" class="p-6 border rounded-lg hover:bg-red-100">
                <h2 class="text-2xl font-semibold">Shortly</h2>
                <p class="mt-2 text-gray-600">A URL shortening service with a clean UI.</p>
            </a>
        </div>
</div>
</x-layout.home>
