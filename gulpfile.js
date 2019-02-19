/*
** variables
*/
var gulp = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    sass = require('gulp-sass'),
    rename = require("gulp-rename"),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    babel = require("gulp-babel"),
    pump = require('pump'),
    fsCache = require('gulp-fs-cache'),
    gulpsync = require('gulp-sync')(gulp);

require('gulp-grunt')(gulp);

// hide warning about maxListeners
require('events').EventEmitter.prototype._maxListeners = 100;

var externalCss = [
        './resources/css/reset.css',
        './webroot/css/bootstrap.css',
        './webroot/css/default.css',
        './resources/css/lib/bootstrap-select.min.css',
        './resources/css/lib/bootstrap-notify.css',
        './resources/css/jquery/jquery-ui.css',
        './resources/css/jquery/jquery.fancybox.css'
    ],
    externalJs = [
        './node_modules/jquery/dist/jquery.js',
        './resources/js/jquery/jquery-ui.min.js',
        './resources/js/jquery/jquery.menu-aim.js',
        './resources/js/jquery/jquery.bxslider-rahisified.js',
        './resources/js/jquery/jquery.validate.min.js',
        './resources/js/jquery/jquery.mousewheel-3.0.6.pack.js',
        './resources/js/jquery/jquery.fancybox.js',
        './resources/js/jquery/sweet-alert.js',
        './resources/js/bootstrap/modal.js',
        './resources/js/bootstrap/dropdown.js',
        './resources/js/lib/maps.google.js',
        './resources/js/lib/bootstrap-select.min.js',
        './resources/js/lib/bootstrap-notify.js',
        './resources/lib/picturefill.min.js'
    ];

/*
** Styles
*/
gulp.task('sassBase', function () {
    return gulp.src('./resources/sass/import_base.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        })
            .on('error', sass.logError))
        .pipe(rename('sass-base.css'))
        .pipe(autoprefixer({
            browsers: ['last 2 versions', 'ie >= 9']
        }))
        .pipe(gulp.dest('./webroot/css'));
});

gulp.task('sassMain', function () {
    return gulp.src('./resources/sass/import.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        })
            .on('error', sass.logError))
        .pipe(rename('sass-main.css'))
        .pipe(autoprefixer({
            browsers: ['last 2 versions', 'ie >= 9']
        }))
        .pipe(gulp.dest('./webroot/css'));
});

externalCss.push('./webroot/css/sass-base.css', './webroot/css/sass-main.css');
gulp.task('cssConcat', function (callback) {
    pump([
        gulp.src(externalCss),
        concat('css-styles.css'),
        gulp.dest('./webroot/css/'),
    ], callback);
});

gulp.task('styles', gulpsync.sync([
    'sassBase', 'sassMain', 'cssConcat'
]));

/*
** Js scripts
*/
gulp.task('jsLib', function (callback) {
    jsCache = fsCache('.gulp-cache/js/lib');

    pump([
        gulp.src(externalJs),
        concat('resources-lib.js'),
        jsCache,
        uglify(),
        jsCache.restore,
        gulp.dest('./webroot/js/')
    ], callback);
});

gulp.task('jsGeneral', function (callback) {
    jsCache = fsCache('.gulp-cache/js/general');

    pump([
        gulp.src(['./resources/js/default.js', './resources/js/general/*.js']),
        concat('resources-general.js'),
        babel({ presets: ['env'] }),
        jsCache,
        uglify(),
        jsCache.restore,
        gulp.dest('./webroot/js/')
    ], callback);
});

gulp.task('scripts', ['jsLib', 'jsGeneral'], function (callback) {
    pump([
        gulp.src([
            './webroot/js/resources-lib.js',
            './webroot/js/resources-general.js'
        ]),
        concat('js-scripts.js'),
        gulp.dest('./webroot/js/')
    ], callback);
});

/*
** Copy
*/
gulp.task('copy', function () {
    // fonts
    gulp.src('./resources/fonts/**/*')
        .pipe(gulp.dest('./webroot/fonts/'));

    // img
    gulp.src('./resources/img/**/*')
        .pipe(gulp.dest('./webroot/img/'));
});

/*
** Watch tasks
*/
gulp.task('watch', ['styles'], function () {
    // default watchers
    gulp.watch(['./resources/sass/**/*.scss'], ['styles']);
    gulp.watch(['./resources/js/parts/*.js', './resources/js/default.js'], ['scripts']);
});


// Grunt tasks
gulp.task('gr-bootstrap', ['grunt-bootstrap']);
gulp.task('gr-lessdefault', ['grunt-less:default']);
gulp.task('gr-css', ['grunt-css']);
gulp.task('gr-img', ['grunt-img']);
gulp.task('gr-copy', ['grunt-copy']);
gulp.task('gr-uglify', ['grunt-uglify']);
gulp.task('gr-deploy', ['grunt-deploy']);

/*
** Default tasks
*/
gulp.task('default', ['watch']);
gulp.task('install', gulpsync.sync(['copy', 'gr-bootstrap', 'gr-lessdefault', 'styles', 'scripts']));
