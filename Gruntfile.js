module.exports = function(grunt) {

  grunt.initConfig({
    sass: {
        dist: {
            options: {
              style: 'nested'
            },
            files: {
                'demo.css': 'demo.scss'
            }
        }
    },
    autoprefixer: {
      options: {
        browsers: ['last 2 versions', 'ie 9']
      },
      no_dest: {
        src: 'demo.css' // globbing is also possible here
      },
    },

    watch: {
      files: ['*.scss'],
      tasks: ['sass', 'autoprefixer']
    }
  });

  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-sass');

  grunt.registerTask('default', ['watch']);

};