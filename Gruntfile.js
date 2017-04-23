module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            less: {
                files: './resources/less/*/*.less',
                tasks: ['css']
            },
            js: {
                files: 'resources/js/*.js',
                tasks: ['uglify']
            },
            img: {
                files: 'resources/img/*/*',
                tasks: ['img']
            }
        },

        less: {
            compile: {
                files: {
                    './webroot/less/import.css' : './resources/less/import.less'
                }
            },
            bootstrap: {
                files: {
                    './webroot/css/bootstrap.css' : './resources/css/bootstrap/bootstrap.less'
                }
            },
            default: {
                files: {
                    './webroot/css/default.css' : './defaults/resources/css/less/import.less'
                }
            }
        },

        concat_css: {
          all: {
            src: [
              './resources/css/reset.css',
              './webroot/css/bootstrap.css',
              './webroot/css/default.css',
              './resources/css/lib/bootstrap-select.min.css',
              './resources/css/lib/bootstrap-notify.css',
              './resources/css/jquery/jquery-ui.css',
              './resources/css/jquery/jquery.fancybox.css',
              './resources/css/sprite_all.css',
              './webroot/less/import.css'
            ],
            dest: './webroot/css/styles.css'
          },
        },

        sprite:{
          all: {
            src: ['resources/img/*/*.png', '!resources/img/bg/*', '!resources/img/logos/*'],
            retinaSrcFilter: ['resources/img/*/*@2x.png', '!resources/img/bg/*', '!resources/img/logos/*'],
            dest: 'webroot/img/sprite_all.png',
            retinaDest: 'webroot/img/sprite_all@2x.png',
            destCss: 'resources/css/sprite_all.css',
            cssOpts: {
              cssSelector: function (item) {
                return '.' + item.name;
              }
            }
          }
        },

        uglify: {
          my_target: {
            files: {
              'webroot/js/scripts.js': [
                './node_modules/jquery/dist/jquery.js',
                './resources/js/jquery/jquery-ui.min.js',
                './resources/js/jquery/jquery.menu-aim.js',
                './resources/js/jquery/jquery.bxslider-rahisified.js',
                './resources/js/jquery/jquery.validate.min.js',
                './resources/js/jquery/jquery.mousewheel-3.0.6.pack.js',
                './resources/js/jquery/jquery.fancybox.js',
                './resources/js/jquery/sweet-alert.js',
                './resources/js/bootstrap/modal.js',
                './resources/js/bootstrap/dropdown.js',
                './resources/js/lib/maps.google.js',
                './resources/js/lib/bootstrap-select.min.js',
                './resources/js/lib/bootstrap-notify.js',
                './resources/lib/picturefill.min.js',
                './resources/js/default.js'
              ]
            }
          }
        },

        cssmin: {
          target: {
            files: [{
              expand: true,
              cwd: './webroot/css',
              src: ['styles.css'],
              dest: './webroot/css',
              ext: '_min.css'
            }]
          }
        },

        copy: {
          main: {
            files: [
              { expand: true, cwd: './resources/img/', src: '*/**', dest: './webroot/img/' },
              { expand: true, cwd: './resources/fonts/', src: '*/**', dest: './webroot/fonts/' }
            ]
          }
        }
    });

    // Tasks.
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-concat-css');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-spritesmith');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-copy');

    grunt.registerTask('default', ['watch']);
    grunt.registerTask('bootstrap', ['less:bootstrap']);
    grunt.registerTask('css', ['less:compile', 'concat_css:all', 'cssmin']);
    grunt.registerTask('img', ['sprite', 'copy', 'css']);
    grunt.registerTask('deploy', ['sprite', 'copy', 'bootstrap', 'less:default', 'css', 'uglify']);

};