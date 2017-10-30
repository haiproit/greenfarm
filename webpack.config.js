const UglifyJSPlugin = require('uglifyjs-webpack-plugin');

const config = {
    devtool: 'cheap-source-map',
    output: {
        filename: 'bundle.js'
    },
    module: {
        rules: [{
            test: /\.js$/,
            exclude: /(node_modules|bower_components)/,
            use: [{
                loader: 'babel-loader',
                options: {
                    presets: [['es2015', {modules: false}]],
                    plugins: ['syntax-dynamic-import']
                }
            }]
        }]
    },
    plugins:[
        new UglifyJSPlugin({
            compress: {
                warnings: false
            },
            sourceMap: true
        })
    ]
};

module.exports = config;