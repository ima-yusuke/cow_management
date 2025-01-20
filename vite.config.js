import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/side-menu.css',
                'resources/js/app.js',
                'resources/js/dash/main.js',
                'resources/js/dash/cow.js',
                'resources/js/side-menu.js'
            ],
            refresh: true,
        }),
    ],
});
