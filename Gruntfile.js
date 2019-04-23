module.exports = function(grunt) {
	
	const sass = require('node-sass');
	require('load-grunt-tasks')(grunt);

	// Project configuration.
	grunt.initConfig({
	pkg: grunt.file.readJSON('package.json'),
		
		/**
		 * Sass tasks
		 */
		sass: {
			dist: {
				options: {
					implementation: sass,
					sourceMap: true,
					outputStyle: 'compressed'
				},
				files: {
					'./style.min.css': './style.css'
				}
			}
		},
		
		/**
		 * Concat files
		 */
		concat: {
			options: {
				separator: ';\n',
			},
			dist: {
				src: [
					'assets/js/global.min.js',
					'assets/js/navigation.min.js',
					'assets/js/theme.min.js',
				],
				dest: 'assets/js/script.min.js'
			},
		},
		
		/**
		 * Minify JS
		 */
		uglify: {
			build:{
				options: {
					sourceMap: true,
					mangle: {
						reserved: ['jQuery']
					}
				},
				files: [{
					expand: true,
					src: ['assets/js/*.js', '!assets/js/*.min.js'],
					dest: 'assets/js',
					cwd: '.',
					rename: function (dst, src) {
					// To keep the source js files and make new files as `*.min.js`:
					// return dst + '/' + src.replace('.js', '.min.js');
					// Or to override to src:
					return src.replace('.js', '.min.js');;
					}
				}]
			}
		},
		
		/**
		 * Watch changes to files
		 */
		watch: {
			css: {
				files: ['./style.css'],
				tasks: ['sass']
			},
			js: {
				files: ['assets/js/*.js', '!node_modules/*', '!assets/js/script*.js'],
				tasks: ['uglify', 'concat']
			}
		}
		
	});

	// Load tasks
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');

	// Default task(s).
	grunt.registerTask('default', ['watch']);

};