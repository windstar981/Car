let mix = require(__dirname + '/../../node_modules/laravel-mix/src/index');
const path = require('path');

let directory_bundle = 'public/platform/interest';
mix.setPublicPath(path.normalize(directory_bundle));

let build_scss = [
    {
        from: '/src/resources/scss/test.scss',
        to: 'scss/test.css'
    },
    {
        from: '/src/resources/scss/calculate.scss',
        to: 'css/calculate.css'
    },
    {
        from: '/src/resources/scss/compounding.scss',
        to: 'css/compounding.css'
    },
    {
        from: '/src/resources/scss/insurance.scss',
        to: 'css/insurance.css'
    },
    {
        from: '/src/resources/scss/interestperson.scss',
        to: 'css/interestperson.css'
    },
    {
        from: '/src/resources/scss/unemployment.scss',
        to: 'css/unemployment.css'
    },
    {
        from: '/src/resources/scss/plan.scss',
        to: 'css/plan.css'
    },
    {
        from: '/src/resources/scss/plugininterest.scss',
        to: 'css/plugininterest.css'
    }
];

let build_js = [
    {
        from: '/src/resources/js/calculate.js',
        to: 'js/calculate.js'
    },
    {
        from: '/src/resources/js/compounding.js',
        to: 'js/compounding.js'
    },
    {
        from: '/src/resources/js/insurance.js',
        to: 'js/insurance.js'
    },
    {
        from: '/src/resources/js/interestperson.js',
        to: 'js/interestperson.js'
    },
    {
        from: '/src/resources/js/unemployment.js',
        to: 'js/unemployment.js'
    },
    {
        from: '/src/resources/js/plan.js',
        to: 'js/plan.js'
    },
    {
        from: '/src/resources/js/plugininterest.js',
        to: 'js/plugininterest.js'
    },
    {
        from: '/src/resources/js/tableHTMLExport.js',
        to: 'js/tableHTMLExport.js'
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

