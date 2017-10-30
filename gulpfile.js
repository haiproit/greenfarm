/* jshint node: true */
module.export = (function(){
    "use strict";

    const theme_name    = 'greenfarm', // Edit
        gulp            = require('gulp'),
        sass            = require('gulp-sass'),
        sourcemaps      = require('gulp-sourcemaps'),
        postcss         = require('gulp-postcss'),
        uglify          = require('gulp-uglify'),
        concat          = require('gulp-concat'),
        watch           = require('gulp-watch'),
        gutil           = require('gulp-util'),
        webpackStream   = require('webpack-stream'),
        webpack         = require('webpack'),
        del             = require('del'),
        autoprefixer    = require('autoprefixer'),
        bs              = require('browser-sync').create(),
        path            = require('path'),
        wpConfig        = require('./webpack.config'),
        skin_url        = './skin/frontend/greenfarm/default/',
        theme_url       = './app/design/frontend/greenfarm/default/',
        base_url        = 'greenfarm.dev/' + __dirname.split(path.sep).pop() + '/'; //if you run magento from folder or change to local url


    gulp.task('sass', () => {
        let processors = [
            autoprefixer({remove:true})
        ];
        return gulp.src(skin_url +'scss/*.scss')
            .pipe(sourcemaps.init())
            .pipe(sass({
                includePaths: ['./skin/frontend/rwd/default/scss'],
                outputStyle: 'compressed'
            }).on('error', sass.logError))
            .pipe(postcss(processors))
            .pipe(sourcemaps.write('./'))
            .pipe(gulp.dest(skin_url +'css/'))
            .pipe(bs.stream({match: '**/*.css'}));
    });

    gulp.task('js', ['js:uglify', 'js:webpack' ]);

    gulp.task('js:uglify', () => {
        return gulp.src(skin_url +'js/src/**/*')
            .pipe(sourcemaps.init())
            .pipe(uglify())
            .pipe(sourcemaps.write('./'))
            .pipe(gulp.dest(skin_url + 'js/'))
            .pipe(bs.stream());
    });

    gulp.task('js:webpack', () => {
        wpConfig.output.publicPath = base_url + skin_url.replace('./','') + 'js/';
        return gulp.src(skin_url +'js_src/entry.js')
            .pipe(webpackStream(wpConfig, webpack))
            .pipe(gulp.dest(skin_url + 'js/'))
            .pipe(bs.stream());
    });

    gulp.task('clean', () => {
        return del(['./var/cache']).then(bs.reload);
    });

    gulp.task('watch', cb => {
        bs.init({
            open: false,
            proxy: base_url
        });
        watch(skin_url + 'scss/**/*', function(){ gulp.start('sass'); });
        watch(skin_url + 'js_src/**/*', function(){ gulp.start('js:webpack'); });
        watch(skin_url + 'js/src/**/*', function(){ gulp.start('js:uglify'); });
        watch(skin_url + 'js/**/*', function(){ bs.reload(); });
        watch(theme_url + '**/*', function(){ gulp.start('clean'); });
        cb();
    });

    gulp.task('watch:styles', cb => {
        bs.init({
            open: false,
            proxy: base_url
        });
        watch(skin_url + 'scss/**/*', function(){ gulp.start('sass'); });
        cb();
    });

    gulp.task('default', ['sass', 'js', 'clean']);

})();
