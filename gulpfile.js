'use strict'

var gulp         = require('gulp');
var concat       = require('gulp-concat');
var rename       = require("gulp-rename");
var less         = require("gulp-less");
var autoprefixer = require('gulp-autoprefixer');
var del          = require('del');

gulp.task('clean-styles', function (cb) {
	del('bitrix/templates/main/styles/build/')
		.then(cb.bind(null, null), cb.bind(null));
});

gulp.task('styles', ['clean-styles'], function () {
	gulp.src('bitrix/templates/main/styles/src/**/*.less')
		.pipe(less())
		.pipe(concat('common.css'))
		.pipe(autoprefixer('last 5 versions', '> 1%', 'ie 9'))
		.pipe(rename('build.css'))
		.pipe(gulp.dest('bitrix/templates/main/styles/build/'));
});

gulp.task('watch', function () {
	gulp.watch('bitrix/templates/main/styles/src/**/*', ['styles']);
});

gulp.task('clean', ['clean-styles']);

gulp.task('default', ['styles']);
