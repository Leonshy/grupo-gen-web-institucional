import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
            'resources/js/app.js',
            'resources/js/components/swiper.js'
        ],
            refresh: true,
        }),
        tailwindcss()
    ],
});