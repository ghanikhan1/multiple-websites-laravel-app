import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from 'tailwindcss';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/shortly.scss',
                'resources/js/shortly.js'
            ],
            buildDirectory: 'build/shortly',
        }),
    ],
    css: {
        postcss: {
            plugins: [
                tailwindcss('./tailwind-shortly.config.js'),
            ],
        },
    },
});

