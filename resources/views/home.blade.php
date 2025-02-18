<x-layout.home>
    <div
        class="relative overflow-hidden min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-indigo-100">

        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 id="heading"
                class="text-5xl md:text-6xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600">
                Elevate Your Digital Experience
            </h1>
            <p id="subtext" class="text-lg mt-4 text-gray-700">
                A collection of modern, high-performance landing pages built with Laravel, Tailwind CSS, Vite, and SCSS.
            </p>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <a href="{{ url('fylo') }}"
                   class="project-card p-6 border rounded-xl shadow-lg bg-white hover:scale-105 transition-transform duration-300">
                    <h2 class="text-2xl font-semibold text-gray-800">Fylo</h2>
                    <p class="mt-2 text-gray-600">A sleek cloud storage solution with an elegant dark mode.</p>
                </a>

                <a href="{{ url('loopstudio') }}"
                   class="project-card p-6 border rounded-xl shadow-lg bg-white hover:scale-105 transition-transform duration-300">
                    <h2 class="text-2xl font-semibold text-gray-800">LoopStudio</h2>
                    <p class="mt-2 text-gray-600">A visually immersive digital studio showcase with interactive
                        elements.</p>
                </a>

                <a href="{{ url('shortly') }}"
                   class="project-card p-6 border rounded-xl shadow-lg bg-white hover:scale-105 transition-transform duration-300">
                    <h2 class="text-2xl font-semibold text-gray-800">Shortly</h2>
                    <p class="mt-2 text-gray-600">A powerful URL shortening service with a user-friendly interface.</p>
                </a>
            </div>

            <div class="mt-16">
                <a href="https://github.com/ghanikhan1" target="_blank"
                   id="github-button"
                   class="cta-button px-6 py-3 text-lg font-semibold text-white bg-gradient-to-r from-blue-500 to-purple-500 rounded-lg shadow-lg hover:scale-105 transition-all duration-300">
                    Explore More on GitHub →
                </a>
            </div>

            <div class="mt-12">
                <h2 class="text-3xl font-semibold text-center">My Latest GitHub Repositories</h2>
                <div id="github-repos" class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6"></div>
            </div>

        </div>
    </div>
</x-layout.home>
