import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from 'tailwindcss';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/fylo.scss',
                'resources/js/fylo.js'
            ],
            buildDirectory: 'build/fylo',
        }),
    ],
    css: {
        postcss: {
            plugins: [
                tailwindcss('./tailwind-fylo.config.js'),
            ],
        },
    },
});
