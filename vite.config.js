import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        host: '10.10.81.75',
        port: 5173,
        watch: {
            usePolling: true,
        },
        cors: {
            origin: 'http://10.10.81.75:8443', 
            methods: ['GET', 'POST', 'PUT', 'DELETE'],
            allowedHeaders: ['Content-Type'],
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: ['resources/views/**'],
        }),
        tailwindcss(),
    ],
});
