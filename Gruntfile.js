module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  grunt.initConfig({
  	pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'src/<%= pkg.name %>.js',
        dest: 'build/<%= pkg.name %>.min.js'
      }
    },
    
    sass: {                              // Task 
	    dist: {                            // Target 
	      options: {                       // Target options 
	        style: 'expanded'
	      },
	      files: {                         // Dictionary of files 
	        'src/css/wmhcsslib.css': 'src/sass/wmhcsslib.scss'
	      }
	    }
	},
	
    watch: {
      styles: {
        files: ['src/sass/**/**/*.scss'], // which files to watch
        tasks: ['sass'],
        options: {
          nospawn: true
        }
      }
    }
  });
  // Load the plugins.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');
  
  // Default task(s).
  grunt.registerTask('default', ['sass', 'watch','uglify']);
};