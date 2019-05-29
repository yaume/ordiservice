var gulp = require('gulp'),
    $ = require('gulp-load-plugins')();
var sassOptions = {
    errLogToConsole: true,
    outputStyle: 'compressed'
    };
gulp.task('sass', function(){
    return gulp.src('scss/ordiservice.scss')
        .pipe($.sourcemaps.init())
        .pipe($.sass(sassOptions).on('error', $.sass.logError))
        .pipe($.autoprefixer({
            browsers: ['last 2 versions'],
            grid : true
        }))
        .pipe($.sourcemaps.write('css/maps'))
        .pipe(gulp.dest('css'))
  });
  gulp.task('watch',function(){
      gulp.watch('scss/*.scss',gulp.series('sass'));
  });