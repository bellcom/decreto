/* global module:true*/
module.exports = function(grunt) {
    'use strict';
    var timestamp = Date.now(); // Used to cachebust the sprite image.
    grunt.initConfig({
        // running `grunt less` will compile once
        less: {
            development: {
                options: {
                    compress: true,
                    paths: ["./less"],
                    banner: "/* decreto_frontend ApS - http://github.com/decreto_frontend */"
                },
                files: {
                    "./css/stylesheet.css": "./less/stylesheet.less"
                }
            },
        },
        // running `grunt watch` will watch for changes
        watch: {
            // Watch less files and run "less" on changes
            less: {
                files: [
                    './less/*.less',
                    './less/**/*.less',
                    './less/**/**/*.less',
                    './less/**/**/**/*.less',
                    './less/**/**/**/**/*.less',
                    './less/**/**/**/**/**/*.less',
                    './less/**/**/**/**/**/**/*.less',
                    './less/**/**/**/**/**/**/**/*.less',
                ],
                tasks: ['less']
            }
        }
    });


    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-connect');

    //
    grunt.registerTask('default', function() {

        // Set text message for the user...
        grunt.log.write('Now watching for changes');

        // Start watching for changes made in .less files
        grunt.task.run('watch');

    });
    grunt.registerTask('build', ['less']);
    grunt.registerTask('server', [
        'connect',
        'watch'
    ]);
};