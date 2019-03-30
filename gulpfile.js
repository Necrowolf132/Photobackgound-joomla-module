// VARIABLES
//const concat        = require('gulp-concat');
//const sass          = require('gulp-sass');
//const postcss       = require('gulp-postcss');
//const autoprefixer  = require('autoprefixer');
//const flexboxfixer  = require('postcss-flexboxfixer');
//const uglify        = require('gulp-uglify');
//const browserSync   = require('browser-sync').create();
const gulp          = require('gulp');
const zip           = require('gulp-zip');

// FILES
//gulp.task('files', function() {
//    var bootstrap = gulp.src('node_modules/bootstrap/scss/**/*')
//    .pipe(gulp.dest('scss/bootstrap'));
//    var fontawesome = gulp.src('node_modules/@fortawesome/fontawesome-free/scss/**/*')
//        .pipe(gulp.dest('scss/fontawesome'));
//    var webfonts = gulp.src('node_modules/@fortawesome/fontawesome-free/webfonts/**/*')
//        .pipe(gulp.dest('webfonts'));
//    return (bootstrap, fontawesome, webfonts);
//});

// CSS
//gulp.task('sass', function() {
//    return gulp.src(['scss/main.scss'])
//        .pipe(sass({outputStyle: 'compressed'}))
//        .pipe(postcss([ autoprefixer() ]))
//        .pipe(postcss([ flexboxfixer() ]))
//        .pipe(gulp.dest('build'))
//        .pipe(browserSync.stream());
//});

// JS
//gulp.task('js', function() {
//    return gulp.src([
//        'node_modules/jquery/dist/jquery.slim.min.js',
//        'node_modules/popper.js/dist/umd/popper.min.js',
//        'node_modules/bootstrap/dist/js/bootstrap.min.js',
//        'js/jqBootstrapValidation.js',
//        'js/script.js'
//        ])
//        .pipe(concat('app.js'))
//        .pipe(uglify())
//        .pipe(gulp.dest('build'))
//        .pipe(browserSync.stream());
//});

// SERVE
gulp.task('serve', function() {
    exports.browserSync = browserSync.init({
        // server: './'' // default server
        // proxy: 'http://localhost:8888/' // mamp
        // la localhost de la instalacion de jommla
        proxy: 'http://localhost/PrimerJoomla/' // usualy
    });
    gulp.watch('sql/**/*.sql', gulp.series('zip'));
    gulp.watch('**/*.xml', gulp.series('zip'));
    gulp.watch('**/*.php', gulp.series('zip')).on('change', browserSync.reload);
});

// ZIP
gulp.task('zip', function() {
    return gulp.src([
      '**/*',
      '!node_modules/**',
      '!dist/**',
      '!./module_I_Necroland.zip'
      ])
      .pipe(zip('module_I_Necroland.zip'))
      .pipe(gulp.dest('./'));
});

gulp.task('default', gulp.series('zip','serve'));

