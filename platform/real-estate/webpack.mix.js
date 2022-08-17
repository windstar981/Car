let mix = require(__dirname + '/../../node_modules/laravel-mix/src/index');
const path = require('path');

let directory_bundle = 'public/platform/real-estate';
mix.setPublicPath(path.normalize(directory_bundle));

let build_scss = [
    {
        from: '/src/resources/scss/costestimate.scss',
        to: 'css/costestimate.css'
    },
    {
        from: '/src/resources/scss/viewdirection.scss',
        to: 'css/viewdirection.css'
    },
    {
        from: '/src/resources/scss/fengshui.scss',
        to: 'css/fengshui.css'
    },

];

let build_js = [

    {
        from: '/src/resources/js/costestimate.js',
        to: 'js/costestimate.js'
    },
    {
        from: '/src/resources/js/viewdirection.js',
        to: 'js/viewdirection.js'
    },
    {
        from: '/src/resources/js/fengshui.js',
        to: 'js/fengshui.js'
    },

];

build_scss.map((index) => {
    let from = __dirname + index.from;
    let to   = index.to;
    mix.sass(from, to).minify(directory_bundle + '/' + to).version();
});

build_js.map((index) => {
    let from = __dirname + index.from;
    let to   = index.to;
    if (Array.isArray(index.from)) {
        from = [];
        index.from.forEach(file => {
            from.push(__dirname+ file);
        });
    }
    mix.js(from, to).version();
});

mix.options({
    processCssUrls: false
})
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'],
    });
if (mix.inProduction()) {
    mix.version();
}

