import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import path from 'path';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/main.js',
                'resources/css/admin.css',
                'resources/views/admin/js/index.js',
                'resources/views/admin/js/us-aea-en.js'
    
                // 'resources/css/main-rtl.css',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    },
});
