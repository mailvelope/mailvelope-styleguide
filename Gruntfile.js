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
      pages: {
        options: {
          paths: ['assets/css']
        },
        files: [{
          expand: true,
          cwd: 'src/less/pages',
          src: ['*.less'],
          dest: 'src/css/',
          ext: '.css'
        }]
      },
      components: {
        options: {
          paths: ['assets/css']
        },
        files: [{
          expand: true,
          cwd: 'src/less/components',
          src: ['*.less'],
          dest: 'src/css/components',
          ext: '.css'
        }]
      },
    },

    // Watch for changes and rebuild
    watch: {
      data: {
        files: ['src/less/**/*.*'],
        tasks: ['less'],
        options: {spawn: false}
      },
    }
  });

};
