var gulp = require('gulp');
var browserSync = require('browser-sync').create();

// Static Server + watching scss/html files
gulp.task('serve', function() {
  browserSync.init({
    proxy: 'montesori' //название папки домена в опен сервере
  });

  gulp.watch('**/*.html').on('change', browserSync.reload);
  gulp.watch('sass/**/*.sass').on('change', browserSync.reload);
  gulp.watch('*.php').on('change', browserSync.reload);
});

gulp.task('default', ['serve']);
