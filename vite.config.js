const app_path = '../../html';
const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: app_path + '/.env'/*, debug: true*/}));

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    build: {
        outDir: app_path + '/public/build-templates',
        emptyOutDir: true,
        manifest: true,
    },
    plugins: [
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        laravel({
            hotFile: app_path + '/storage/templates.hot',
            publicDirectory: app_path + '/public',
            buildDirectory: 'build-templates',
            input: [
                __dirname + '/resources/assets/sass/app.scss',
                __dirname + '/resources/assets/js/app.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },

    server: {
        host: true,
        hmr: {
            host: 'localhost',
        },
        watch: {
            usePolling: true,
        },
    },
});
