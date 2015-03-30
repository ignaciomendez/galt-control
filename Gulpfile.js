var gulp = require('gulp');

gulp.task('default', function () {
    gulp.start('install');
});

gulp.task('install', function () {
    gulp.start('sass','js-copy','css-copy');
});

var sass = sass = require('gulp-sass');

gulp.task('sass', function () {
    gulp.src('./web/vendor/foundation/scss/foundation.scss')
        .pipe(sass({sourceComments: 'map'}))
        .pipe(gulp.dest('./web/css'));
});


gulp.task('js-copy', function() {
    gulp.src([
        './web/bundles/*/js/**/*.js',
        './web/vendor/foundation/js/foundation.min.js',
        './web/vendor/jquery/dist/jquery.min.js',
        './web/vendor/requirejs/require.js'
    ])
        .pipe(gulp.dest('./web/js'));
});

gulp.task('css-copy', function() {
    gulp.src([
        './web/bundles/*/css/**/*.css'
    ])
        .pipe(gulp.dest('./web/css'));
});