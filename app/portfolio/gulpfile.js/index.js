// const os = require('os')
// const fs = require('fs')
// const path = require('path')
// const del = require('del')
const gulp = require('gulp');
const argv = require('yargs').argv;
const plugins = require('gulp-load-plugins')({
  postRequireTransforms: {
    sass: function(sass) {
      return sass(require('sass'));
    }
  }
});
//const projectPath = require('./lib/projectPath')


// ---------------- function to get tasks from `tasks` folder
function getTask(task) {
  return require('./tasks/' + task)(gulp, plugins, argv);
}

//gulp.task('clean', getTask('clean'));
gulp.task('stylesheets', getTask('stylesheets'));

// ------------------------------------------ NPM Start Task
gulp.task('default', gulp.series(
  //'clean',
  'stylesheets'
  )
);