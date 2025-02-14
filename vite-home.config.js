import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from 'tailwindcss';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/home.scss',
                'resources/js/home.js'
            ],
            buildDirectory: 'build/home',
        }),
    ],
    css: {
        postcss: {
            plugins: [
                tailwindcss('./tailwind-home.config.js'),
            ],
        },
    },
});
