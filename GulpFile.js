var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

/* 
	---	TOP LEVEL FUNCTIONS	---
gulp.task - define tasks,
gulp.src - points to file to use,
gulp.dest - points to folder to output,
gulp.watch - watch files and folders for changes

*/


gulp.task('sass', function() {
    return gulp.src('sass/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('css'));
});

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {
	gulp.watch("sass/*.scss", ['sass']);
});

// Watch task = updates SASS and refreshes Browser Sync
gulp.task('default', ['serve']);