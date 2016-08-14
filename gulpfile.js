// Define plugin to load in our gulpfile
var gulp			= require('gulp');
var postcss			= require('gulp-postcss');
var cssnext			= require('postcss-cssnext');
var atImport		= require('postcss-import');
var mqpacker		= require('css-mqpacker');
var cssnano			= require('cssnano');
var csso 			= require('gulp-csso');
var cleanCSS 		= require('gulp-clean-css');
var size			= require('gulp-size');
var uncss 			= require('gulp-uncss');
var cssvariables	= require('postcss-css-variables');
var watch			= require('gulp-watch');
var browserSync		= require('browser-sync').create();
var browserReload	= browserSync.reload;

var devURL			= 'http://balcsida-laptop/winsider/'


// The complete CSS processing task
gulp.task('css', function(){

	// Define Postcss plugins which we'll pass below
	var postcssPlugins = [
		atImport,
		cssnext({
			'browsers' : ['last 2 versions']
		}),
		cssvariables,
		cssnano({
			'autoprefixer' : false
		}),
		mqpacker,
	];

	// Steps making up the CSS task
	// First identify the source
	return gulp.src('./src/css/style.css')

		// Then pass in Postcss plugins
		.pipe(postcss(postcssPlugins))


        .pipe(cleanCSS({debug: true}, function(details) {
            console.log(details.name + ': ' + details.stats.originalSize);
            console.log(details.name + ': ' + details.stats.minifiedSize);
        }))
		.pipe(csso({
            restructure: true,
            sourceMap: false,
            debug: true
        }))
        .pipe(uncss({
            html: ['http://balcsida-laptop/winsider'],
            ignore: [".facebook:hover",".youtube:hover",".hover-bg-black:hover"]
        }))
		// Then print the size of the stylesheet to the console
		.pipe(size({gzip: false, showFiles: true}))
		.pipe(size({gzip: true, showFiles: true}))
        // Then define where to deliver the end result
		.pipe(gulp.dest('./'))

		.pipe(browserSync.stream());
});

// The complete CSS processing task
gulp.task('css-dev', function(){

	// Define Postcss plugins which we'll pass below
	var postcssPlugins = [
		atImport,
		cssnext({
			'browsers' : ['last 2 versions']
		}),
		cssvariables,
		cssnano({
			'autoprefixer' : false
		}),
		mqpacker,
	];

	// Steps making up the CSS task
	// First identify the source
	return gulp.src('./src/css/style.css')
		// Then pass in Postcss plugins
		.pipe(postcss(postcssPlugins))
        // Then define where to deliver the end result
		.pipe(gulp.dest('./'))
		.pipe(browserSync.stream());
});

// The gulp watch task
gulp.task('watch', function(){
	browserSync.init({
		files: ['{lib}/**/*.php', '*.php', 'inc/*.php'],
		proxy: devURL,
		snippetOptions: {
			whitelist: ['/wp-admin/admin-ajax.php'],
			blacklist: ['/wp-admin/**']
		}
	});

	gulp.watch('./src/css/*.css', ['css-dev']).on('change', browserSync.reload);
	gulp.watch('**.php').on('change', browserSync.reload);
});