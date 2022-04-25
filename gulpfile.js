const gulp = require('gulp'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-sass')
;

function css() {
	return gulp.src([
		'./node_modules/jqvmap/dist/jqvmap.css',
		'./public/css/src/styles.scss'
	])
	.pipe(concat('styles.css'))
	.pipe(sass().on('error', sass.logError))
	.pipe(gulp.dest('./public/css/'));
}

function js() {
	return gulp.src([
		'./node_modules/jquery/dist/jquery.js',
		'./node_modules/bootstrap/dist/js/bootstrap.js',
		'./node_modules/jqvmap/dist/jquery.vmap.js',
		'./node_modules/jqvmap/dist/maps/jquery.vmap.world.js',
		'./public/js/src/*',
	])
	.pipe(concat('main.js'))
	.pipe(uglify())
	.pipe(gulp.dest('./public/js/'));
}


function watch() {
	gulp.watch('./public/css/src/*', css);
  gulp.watch('./public/js/src/*', js);
}

const build = gulp.parallel(css, js);

exports.css = css;
exports.js = js;
exports.build = build;
exports.watch = watch;
exports.default = gulp.series(build, watch);
exports.prod = build;