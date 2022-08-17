require('laravel-mix-merge-manifest');
let webpack = require('webpack');
let directory_asset = 'public';
let mix = require(__dirname + '/node_modules/laravel-mix/src/index');
const path = require("path");


mix.setPublicPath(path.normalize(directory_asset));

if (process.env.module) {
    return require(`${__dirname}/webpack_${process.env.module}.mix.js`);
}

if (module_mix = process.env.platform) {
    let nameModule = process.env.npm_config_name;
    return require(`${__dirname}/platform/${nameModule}/webpack.mix.js`);
}

let build_scss = [

];

let build_js = [

];


build_js.map((file) => {
    mix.js(file.from, file.to);
});

build_scss.map((file) => {
    mix.sass(file.from, file.to).minify(directory_asset + '/' + file.to);
});

mix.options({
    processCssUrls: false,
    terser: {
        extractComments: false,
    }
})
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'],
    });

mix.webpackConfig({
    plugins: [
        new webpack.ContextReplacementPlugin(/\.\/locale$/, 'empty-module', false, /js$/),
        new webpack.IgnorePlugin(/^codemirror$/),
    ],
    // node: {
    //     fs: "empty"
    // },
    module: {
        rules: [
            {
                test: /\.modernizrrc.js$/,
                use: ['modernizr-loader']
            },
            {
                test: /\.modernizrrc(\.json)?$/,
                use: ['modernizr-loader', 'json-loader']
            }
        ]
    },
    resolve: {
        // fallback: {
        //     fs: false
        // },
        alias: {
            "handlebars": "handlebars/dist/handlebars.js",
            modernizr$: path.resolve(__dirname, "resources/assets/js/.modernizrrc"),
        }
    },
});

new webpack.LoaderOptionsPlugin({
    test: /\.s[ac]ss$/,
    options: {
        includePaths: [
            path.resolve(__dirname, './public/')
        ]
    }
});

