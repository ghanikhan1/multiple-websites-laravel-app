import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/home.scss',
                'resources/sass/fylo.scss',
                'resources/sass/loopstudio.scss',
                'resources/sass/shortly.scss',
                'resources/js/home.js',
                'resources/js/fylo.js',
                'resources/js/loopstudio.js',
                'resources/js/shortly.js'
            ],
            refresh: true,
        }),
    ],
    base: "/",
});
