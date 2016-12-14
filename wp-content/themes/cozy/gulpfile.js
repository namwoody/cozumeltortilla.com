// ## Globals
var gulp 		 = require('gulp'),
	autoprefixer = require('gulp-autoprefixer'),
    minifyCss    = require('gulp-minify-css'),
	watch   	 = require('gulp-watch'),
	sass         = require('gulp-sass'),
	imagemin 	 = require('gulp-imagemin'),
	livereload 	 = require('gulp-livereload');




gulp.task('css',function(){
  gulp.src('css/sass/main.scss')
     .pipe(sass())
     .pipe(autoprefixer('last 10 version'))
     .pipe(gulp.dest('css/'))
     .pipe(livereload());

});

gulp.task('imagecompress',function(){
	gulp.src('images/*')
        .pipe(imagemin())
        .pipe(gulp.dest('images/img'));
});

gulp.task('minify-css',function(){
	return gulp.src('css/main.css')
			.pipe(minifyCss({keepSpecialComments: 1}))
			.pipe(gulp.dest('css/style'))
			.pipe(livereload());
});
gulp.task('watch',function(){
	livereload.listen();
 	gulp.watch('css/sass/**/*.scss',['css','minify-css','imagecompress']);
});
gulp.task('default',['watch']);
