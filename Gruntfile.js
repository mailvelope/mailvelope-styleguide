/**
 * Gruntfile
 * Provides tasks and commands to build and distribute the project
 *
 * @param grunt
 * @copyright (c) 2017 Mailvelope Gmbh
 * @licence GNU Affero General Public License http://www.gnu.org/licenses/agpl-3.0.en.html
 */
module.exports = function(grunt) {

  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  /**
   * Main grunt tasks configuration
   */
  grunt.initConfig({

    // Build the pages css
    less: {
      development: {
        options: {
          paths: ['assets/css']
        },
        files: [{
          expand: true,
          cwd: 'less/pages',
          src: ['*.less'],
          dest: 'css/',
          ext: '.css'
        }]
      },
    },

    // Watch for changes and rebuild
    watch: {
      data: {
        files: ['less/**/*.*'],
        tasks: ['less'],
        options: {spawn: false}
      },
    }
  });

};
