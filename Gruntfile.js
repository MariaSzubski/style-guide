module.exports = function(grunt){
	grunt.initConfig({
		watch: {
			less: {
				files: ['css/less/*.less'],
				tasks: ['less', 'postcss', 'concat'], // run single method with concat:method_name
				options: {
					livereload: true,
				},
			},
			scripts: {
				files: ['scripts/src/*.js'],
				tasks: ['uglify'], // run single method with concat:method_name
				options: {
					livereload: true,
				},
			},
		},
		less: {
			src: {
				expand:	true,
				cwd:	"css/less",
				src:	["*.less", "!var_mix.less"],
				dest:	"css/build/src",
				ext:	".css",
			},
			options: {
				strictMath: true
			},
		},
		postcss: {
			options: {
				processors: [
					require('pixrem')(), // add fallbacks for rem units
					require('autoprefixer')({
						browsers: ['last 2 versions', '> 5%'],
					}),
					require('cssnano')({
						core: false, // Remove white-space
						mergeRules: true
					})
				]
			},
			dist: {
				src: 'css/build/src/*.css'
			}
		},
		concat: {
			css: {
				src: 	['css/build/src/global.css','css/build/src/*.css',],
				dest:	'css/build/style_v8-1.css',
			},
		},
		uglify: {
			my_target: {
				files:[{
					expand: true,
					cwd:	'scripts/src',
					src:	'*.js',
					dest:	'scripts/build',
					ext:	'.min.js'
				}]
			}
		},
	});

	// Enable Dependencies
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.registerTask('default', ['watch']);
	grunt.registerTask('finalize', ['concat', 'postcss']);
};
