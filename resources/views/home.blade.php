<x-layout.home>
    <div class="relative overflow-hidden min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 transition-all duration-500 py-20">

        <!-- Hero Section -->
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 id="heading" class="py-4 text-5xl md:text-6xl home-gradient-text">
                Multi Brand Laravel Project
            </h1>
            <p id="subtext" class="text-lg mt-4 text-gray-700 dark:text-gray-300 animate-fadeInDelay">
                A collection of modern, high-performance landing pages built with Laravel, Tailwind CSS, Javascript, Vite, and SCSS.
            </p>

            <!-- Dark Mode Toggle -->
            <div class="absolute top-4 right-4">
                <button id="theme-toggle" class="p-2.5 rounded-lg focus:outline-none focus:ring focus:ring-gray-300 dark:focus:ring-gray-700">
                    <svg id="theme-toggle-dark-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z">
                        </path>
                    </svg>
                </button>
            </div>

            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ([
                    ['title' => 'FYLO', 'desc' => 'A sleek cloud storage solution with an elegant dark mode.', 'url' => 'fylo'],
                    ['title' => 'LoopStudio', 'desc' => 'A visually immersive digital studio showcase with interactive elements.', 'url' => 'loopstudio'],
                    ['title' => 'Shortly', 'desc' => 'A powerful URL shortening service with a user-friendly interface.', 'url' => 'shortly']
                ] as $project)
                    <x-home.card :title="$project['title']" :desc="$project['desc']" :url="url($project['url'])" />
                @endforeach
            </div>

            <!-- About This Project -->
            <div class="mt-20 p-4 border rounded-lg shadow-md bg-blue-100 dark:bg-gray-800 max-w-4xl mx-auto">
                <h2 class="home-gradient-text text-xl">About This Project</h2>
                <p class="mt-4 paragraph-text">
                    This multipage Laravel application showcases a collection of custom-built landing pages with Tailwind CSS, SCSS, and Blade components.
                </p>
                <h3 class="mt-6 home-gradient-text text-xl">🔹 Tech Stack & Features</h3>
                <ul class="mt-3 text-lg leading-relaxed list-disc list-inside">
                    <li><strong>Laravel & Blade Components:</strong> Structured for modular development and easy scalability.</li>
                    <li><strong>Custom Tailwind Configs:</strong> Ensuring a unified design system with utility-first styling.</li>
                    <li><strong>SCSS for Styling:</strong> Individual SCSS files per page for maintainability and flexibility.</li>
                    <li><strong>Vite for Asset Optimization:</strong> Faster builds and enhanced frontend performance.</li>
                    <li><strong>SEO Best Practices:</strong> Optimized metadata, semantic HTML, and structured content.</li>
                </ul>
            </div>

            <!-- Latest GitHub Repositories -->
            <div class="mt-16">
                <h2 class="text-3xl text-center home-gradient-text">Latest GitHub Repositories using Fetch API</h2>
                <div id="github-repos" class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6"></div>
            </div>

        </div>
    </div>
</x-layout.home>
