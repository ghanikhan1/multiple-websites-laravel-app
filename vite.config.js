import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/home.scss',
                'resources/scss/fylo.scss',
                'resources/scss/loopstudio.scss',
                'resources/scss/shortly.scss',
                'resources/js/home.js',
                'resources/js/fylo.js',
                'resources/js/loopstudio.js',
                'resources/js/shortly.js'
            ],
            refresh: true,
        }),
    ],
});
