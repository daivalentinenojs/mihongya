const mix = require('laravel-mix');
const config = require('./webpack.config');

mix.copyDirectory('resources/assets/guest/css', 'public/assets/guest/css');
mix.copyDirectory('resources/assets/guest/images', 'public/assets/guest/images');
mix.copyDirectory('resources/assets/guest/js', 'public/assets/guest/js');
mix.copyDirectory('resources/assets/vendors', 'public/assets/vendors');

mix.sourceMaps();
mix.webpackConfig(config);
if (mix.inProduction()) {
    mix.version();
}
