import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // default config
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/js/sweetalert.js',

                // custom config
                'resources/darkpan/lib/owlcarousel/owl.carousel.min.js',
                'resources/darkpan/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css',
                'resources/darkpan/css/bootstrap.min.css',
                'resources/darkpan/css/style.css',

                'resources/darkpan/lib/chart/chart.min.js',
                'resources/darkpan/lib/easing/easing.min.js',
                'resources/darkpan/lib/waypoints/waypoints.min.js',
                'resources/darkpan/lib/owlcarousel/owl.carousel.min.js',
                'resources/darkpan/lib/tempusdominus/js/moment.min.js',
                'resources/darkpan/lib/tempusdominus/js/moment-timezone.min.js',
                'resources/darkpan/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js',

                'resources/darkpan/js/main.js',
            ],
            refresh: true,
        }),
    ],
});
