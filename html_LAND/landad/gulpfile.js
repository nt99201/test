'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var cleancss = require('gulp-cleancss');
var replace = require('gulp-replace');
var insert = require('gulp-insert');

gulp.task('sass', function () {
	gulp.src('src/scss/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass({sourceMap: true, outputStyle: 'expanded'}).on('error', sass.logError))
		.pipe(sourcemaps.write('./maps'))
		.pipe(gulp.dest('src/css/'));
	return;
})

gulp.task('sass:watch', function () {
	gulp.watch('src/scss/**/*.scss', ['sass']);
	return;
});

// 배포 버전 빌드 : gulp release
gulp.task('release', function () {
	gulp.src('src/scss/include/**/*.scss')
		.pipe(sass({sourceMap: true, outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(cleancss({keepBreaks: true, noAdvanced: true}))
		.pipe(insert.prepend('<%@ page language="java" contentType="text/css; charset=UTF-8"%>\n\n'))
		//.pipe(replace('../img', '${imgUrl.center}'))
		.pipe(gulp.dest('dist'));
	return;
})