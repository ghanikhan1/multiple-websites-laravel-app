import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from 'tailwindcss';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/loopstudio.scss',
                'resources/js/loopstudio.js'
            ],
            buildDirectory: 'build/loopstudio',
        }),
    ],
    css: {
        postcss: {
            plugins: [
                tailwindcss('./tailwind-loopstudio.config.js'),
            ],
        },
    },
});
