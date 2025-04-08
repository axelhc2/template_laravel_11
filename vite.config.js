import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        host: 'localhost',
        port: 5173,
        watch: {
            usePolling: true,
        },
        cors: {
            origin: 'http://localhost:8443', 
            methods: ['GET', 'POST', 'PUT', 'DELETE'],
            allowedHeaders: ['Content-Type'],
        },
        /////////////////////////////
        ///////  SSL CONFIG  ////////
        /////////////////////////////
        // https: {
        //   key: fs.readFileSync('privkey.pem'),
        //   cert: fs.readFileSync('fullchain.pem'),
        // },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
