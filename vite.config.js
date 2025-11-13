import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/vaste.css',
                'resources/js/vaste.js',
                'resources/css/slurp.css',
                'resources/js/slurp.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
