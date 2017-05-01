module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

      // Compass
      // Compiles SASS
      compass: {
          dist: {
          options: {
              sassDir: '_build/_sass',
              cssDir: '_build/_css',
              specify: '_build/_sass/*.scss',
              environment: 'production',
              outputStyle: 'compressed'
          }
        }
      },

      // Watch
      // Watches for changes and re-runs functions again
      watch: {
            css: {
                files: '_build/_sass/*.scss',
                tasks: ['compass', 'autoprefixer'],
                options: {
                    livereload: true
                }
            }
        },

      // Autoprefixer
      // Adds vendor prefixes to final css output
      autoprefixer: {
          options: {
              browsers: ['last 3 versions', 'ie 9']
          },
          single_file: {
                src: '_build/_css/main.css',
                dest: 'assets/css/morning-update.css'
          }
      }

  });

  // Load the plugins that provides the above tasks
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');


  // Default task(s) when running 'grunt'
  grunt.registerTask('default', ['compass', 'autoprefixer', 'watch']);

};
