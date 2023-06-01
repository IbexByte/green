import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import path from 'path';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                'resources/js/app.js',
                'resources/js/main.js',
                'resources/css/animate/custom.css',
                'resources/css/nouislider/nouislider.css',
                'resources/css/govity-icons/style.css',
                'resources/css/reey-font/stylesheet.css',
                'resources/css/main.css',
                'resources/vendors/nice-select/jquery.nice-select.min.js',
                'resources/vendors/circleType/jquery.lettering.min.js',
                'resources/vendors/circleType/jquery.circleType.js',
                'resources/vendors/circleType/vendors/timepicker/timePicker.js',
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
