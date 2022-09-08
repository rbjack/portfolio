// =========================================================
// Gulp Task: clean
// Description: deletes build directory
// Dependencies: npm install --save-dev del
// =========================================================
const del = require('del');
const projectPath = require('../lib/projectPath')
 
module.exports = function (gulp, plugins, argv) {
  return function (callback) {

    var patterns = projectPath("./temp");

    var stream =
    // -------------------------------------------- Start Task
			del(patterns, { force: true }, callback);
    // ---------------------------------------------- End Task
    return stream;
  };
};