// =========================================================
// Gulp Task: stylesheets
// Description: complie scss files into css
// Dependencies: npm install --save-dev gulp-sass sass gulp-postcss postcss-merge-rules postcss-merge-queries cssnano autoprefixer tailwindcss @tailwindcss/typography node-sass-import-once
// =========================================================

const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const postcssMergeRules = require('postcss-merge-rules');
const postcssMergeQueries = require('postcss-merge-queries');
const projectPath = require('../lib/projectPath')
const importOnce = require('node-sass-import-once')

module.exports = function (gulp, plugins, argv) {
  return function (cb) {

    let files = ['styles'];
    let extensions = ["sass", "scss", "css", "pcss"];

		cssList = []
		for (let i = 0; i < files.length; i++ ) {
			cssList.push(projectPath("./temp", files[i] + '.{' + extensions + '}'))
		}

		var paths = {
			src: projectPath("./sass", '**/*.{' + extensions + '}'),
			dest: projectPath("./temp"),
			css: cssList
		}

    const postcssPlugins = [
			autoprefixer(),
			postcssMergeRules(),
			postcssMergeQueries(),
			cssnano({
        preset: ['default', 
          { 
            minifyFontValues: { removeQuotes: false }
          }
        ]
      }),
		];

		var stream =
		// -------------------------------------------- Start Task
			gulp.src(paths.src)
				.pipe(plugins.sass({importer: importOnce }).on('error', plugins.sass.logError))
				.pipe(gulp.dest(paths.dest))

		stream.on('end', function() {

			gulp.src(paths.css)
				.pipe(plugins.postcss(postcssPlugins))
				.pipe(gulp.dest(paths.dest))
		})
		// ---------------------------------------------- End Task
		return stream;

  };
};