import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

/*TODO: para ejecutar este archivo se debe poner el comando npm run build */
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
