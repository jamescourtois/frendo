import jigsaw from '@tighten/jigsaw-vite-plugin';
import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';

import { cloudflare } from "@cloudflare/vite-plugin";

export default defineConfig({
    // This ensures that /build/assets/... becomes ./assets/...
    base: '', 
    plugins: [jigsaw({
        input: ['source/_assets/js/main.js', 'source/_assets/css/main.css'],
        refresh: true,
    }), tailwindcss(), cloudflare()],
    build: {
        // This ensures Vite puts the manifest and assets exactly where Jigsaw expects them
        outDir: 'source/assets/build',
        assetsDir: 'assets', // This controls the folder name inside the outDir
    }
});