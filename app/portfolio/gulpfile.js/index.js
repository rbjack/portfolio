const gulp = require('gulp');
const argv = require('yargs').argv;
const plugins = require('gulp-load-plugins')({
  postRequireTransforms: {
    sass: function(sass) {
      return sass(require('sass'));
    }
  }
});


// ---------------- function to get tasks from `tasks` folder
function getTask(task) {
  return require('./tasks/' + task)(gulp, plugins, argv);
}

gulp.task('stylesheets', getTask('stylesheets'));

// ------------------------------------------ NPM Start Task
gulp.task('default', gulp.series(
  'stylesheets'
  )
);