import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
 // Asegúrate de que el base path esté correctamente configurado para que Vite sirva los archivos desde la raíz
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});

