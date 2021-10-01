const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const terser = require('gulp-terser');
const browserSync = require('browser-sync').create();
// const purgecss = require('gulp-purgecss');

// Sass task
function scssTask() {
  return (
    src('assets/sass/style.scss', { sourcemaps: true })
      .pipe(sass())
      // .pipe(purgecss({ content: ['**/*.php', '**/*.js'] }))
      .pipe(postcss([cssnano()]))
      .pipe(dest('./', { sourcemaps: '.' }))
  );
}

function jsTask() {
  return src('assets/js/*.js', { sourcemaps: true })
    .pipe(terser())
    .pipe(dest('dist', { sourcemaps: '.' }));
}

// Browsersync Tasks
function browsersyncServe(cb) {
  browserSync.init({
    proxy: 'underscores.local',
  });
  cb();
}

function browsersyncReload(cb) {
  browserSync.reload();
  cb();
}

// Watch task
function watchTask() {
  watch('**/*.php', browsersyncReload);
  watch(
    ['assets/sass/**.*.scss', 'assets/js/**/*.js'],
    series(scssTask, jsTask, browsersyncReload)
  );
}

// Default Gulp task
exports.default = series(scssTask, jsTask, browsersyncServe, watchTask);
