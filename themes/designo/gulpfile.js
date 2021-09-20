const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const purgecss = require('gulp-purgecss');

function buildStyles() {
  return src('./sass/style.scss')
    .pipe(sass())
    .pipe(purgecss({ content: ['**/*.php', '**/*.js'] }))
    .pipe(dest('./'));
}

function watchTask() {
  watch(['./sass/**/*.scss', '**/*.php'], buildStyles);
}

exports.default = series(buildStyles, watchTask);
