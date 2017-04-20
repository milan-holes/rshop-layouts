module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            less: {
                files: 'resources/less/*/*.less',
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
                    'resources/less/import.css' : 'resources/less/import.less'
                }
            },
            bootstrap: {
                files: {
                    'resources/css/bootstrap.css' : 'resources/css/bootstrap/bootstrap.less'
                }
            }
        },

        concat_css: {
          all: {
            src: [
              'resources/css/reset.css',
              'resources/css/bootstrap.css',
              'resources/css/lib/bootstrap-select.min.css',
              'resources/css/lib/bootstrap-notify.css',
              'resources/css/jquery/jquery-ui.css',
              'resources/css/jquery/jquery.fancybox.css',
              'resources/css/sprite_all.css',
              'resources/less/import.css'
            ],
            dest: 'dev/css/styles.css'
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
                'resources/js/jquery.js',
                'resources/js/jquery/jquery-ui.min.js',
                'resources/js/jquery/jquery.menu-aim.js',
                'resources/js/jquery/jquery.bxslider-rahisified.js',
                'resources/js/jquery/jquery.validate.min.js',
                'resources/js/jquery/jquery.mousewheel-3.0.6.pack.js',
                'resources/js/jquery/jquery.fancybox.js',
                'resources/js/jquery/sweet-alert.js',
                'resources/js/bootstrap/alert.js',
                'resources/js/bootstrap/modal.js',
                'resources/js/bootstrap/affix.js',
                'resources/js/bootstrap/tooltip.js',
                'resources/js/bootstrap/dropdown.js',
                'resources/js/lib/maps.google.js',
                'resources/js/lib/bootstrap-select.min.js',
                'resources/js/lib/bootstrap-notify.js',
                'resources/lib/picturefill.min.js',
                'resources/js/default.js'
              ]
            }
          }
        },

        cssmin: {
          target: {
            files: [{
              expand: true,
              cwd: 'resources/css',
              src: ['styles.css'],
              dest: 'webroot/css',
              ext: '_min.css'
            }]
          }
        },

        copy: {
          main: {
            files: [
              { expand: true, cwd: 'resources/img/bg/', src: '*', dest: 'webroot/img/bg/' },
              { expand: true, cwd: 'resources/img/logos/', src: '*', dest: 'webroot/img/logos/' },
              { expand: true, cwd: 'resources/img/jquery/jquery.fancybox/', src: '*', dest: 'webroot/img/jquery/jquery.fancybox/' }
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
    grunt.registerTask('img', ['sprite', 'copy', 'less:compile', 'concat_css:all', 'cssmin']);
    grunt.registerTask('css', ['less:compile', 'concat_css:all', 'cssmin']);
    grunt.registerTask('deploy', ['sprite', 'copy', 'less:compile', 'concat_css:all', 'cssmin', 'uglify']);

};