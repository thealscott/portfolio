/*
 * Copyright (c) 2013 Al Scott
 * Licensed under the MIT license.
 */

'use strict';

module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    jshint: {
      all: [
        'Gruntfile.js',
        'tasks/*.js',
        '<%= nodeunit.tests %>',
      ],
      options: {
        jshintrc: '.jshintrc',
      },
    },

    // Before generating any new files, remove any previously-created files.
    clean: {
      tests: ['tmp'],
    },
    sassquatch: {
      compass : true,
      sass_path : 'sass',
      extra_configs : [
        'color_map'
      ],
      helpers : [
        'polyfills',
        'utilities'
      ],
      breakpoints : [
        // base always exists
        '600', 
        '960',
        '1280'
      ],
      pages : [
        // default always exists
        'home',
        'project',
        'contact'
      ],
      modules : [
        'typography',
        'buttons',
        'modals',
      ]
    }
  });

  // These plugins provide necessary tasks.
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-sassquatch');

};
