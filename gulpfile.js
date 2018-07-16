const gulp = require('gulp'),
        sass = require('gulp-sass'),
        autoprefixer = require('gulp-autoprefixer');

gulp.task('sass', ()=> 
    gulp.src('./sass/*.sass')
    .pipe(sass({
        outputStyle: 'compressed', 
        sourceComments: false
    }))
    .pipe(autoprefixer({
        browsers: ['last 2 versions'],
        cascade: false
    }))
     .pipe(gulp.dest('./css'))
);
gulp.task('default', () => {
    gulp.watch('./sass/*.sass', ['sass'])
});