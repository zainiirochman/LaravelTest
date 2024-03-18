import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/assets/css/home.css', 'public/asses/js/home.js'],
            refresh: true,
        }),
    ],
});
