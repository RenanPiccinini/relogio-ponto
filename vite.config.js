import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/assets/admin/css/bootstrap.min.css',
                'resources/assets/admin/css/icons.min.css',
                'resources/assets/admin/css/app.min.css',
                'resources/assets/admin/libs/jquery/jquery.min.js',
                'resources/assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js',
                'resources/assets/admin/libs/metismenu/metisMenu.min.js',
                'resources/assets/admin/libs/simplebar/simplebar.min.j',
                'resources/assets/admin/libs/node-waves/waves.min.js',
                'resources/assets/admin/libs/morris.js/morris.min.js',
                'resources/assets/admin/libs/raphael/raphael.min.js',
                'resources/assets/admin/js/pages/dashboard.init.js',
                'resources/assets/admin/js/app.js',

                'resources/assets/site/css/vendor/bootstrap.min.css',
                'resources/assets/site/css/style.min.css',
                'resources/assets/site/js/vendor/popper.js',
                'resources/assets/site/js/vendor/bootstrap.min.js',
                'resources/assets/site/js/plugins/swiper-bundle.min.js',
                'resources/assets/site/js/plugins/glightbox.min.js',
                'resources/assets/site/css/plugins/swiper-bundle.min.css',
                'resources/assets/site/css/plugins/glightbox.min.css',
        ],
            refresh: true,
        }),
    ],
});
