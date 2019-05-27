var gulp = require('gulp');
var sass = require('gulp-sass');
gulp.task('sass', function(){
    return gulp.src('scss/*')
      .pipe(sass( {includePaths: ['./node_modules/foundation-sites/scss']}))    // ici on utilise gulp-sass
      .pipe(gulp.dest('css'))
  });
  gulp.task('watch',function(){
      gulp.watch('scss/*.scss',gulp.series('sass'));
  });