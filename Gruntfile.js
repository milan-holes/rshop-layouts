module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        watch: {
            less: {
                files: 'dev/less/*/*.less',
                tasks: ['css']
            },
            js: {
                files: 'dev/js/*.js',
                tasks: ['uglify']
            },
            img: {
                files: 'dev/img/*/*',
                tasks: ['img']
            }
        },

        less: {
            compile: {
                files: {
                    'dev/less/import.css' : 'dev/less/import.less'
                }
            },
            bootstrap: {
                files: {
                    'dev/css/bootstrap.css' : 'dev/css/bootstrap/bootstrap.less'
                }
            }
        },

        concat_css: {
          all: {
            src: [
              'dev/css/reset.css',
              'dev/css/bootstrap.css',
              'dev/css/lib/bootstrap-select.min.css',
              'dev/css/lib/bootstrap-notify.css',
              'dev/css/jquery/jquery-ui.css',
              'dev/css/jquery/jquery.fancybox.css',
              'dev/css/sprite_all.css',
              'dev/less/import.css'
            ],
            dest: 'dev/css/styles.css'
          },
        },

        sprite:{
          all: {
            src: ['dev/img/*/*.png', '!dev/img/bg/*', '!dev/img/logos/*'],
            retinaSrcFilter: ['dev/img/*/*@2x.png', '!dev/img/bg/*', '!dev/img/logos/*'],
            dest: 'webroot/img/sprite_all.png',
            retinaDest: 'webroot/img/sprite_all@2x.png',
            destCss: 'dev/css/sprite_all.css',
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
                'dev/js/jquery.js',
                'dev/js/jquery/jquery-ui.min.js',
                'dev/js/jquery/jquery.menu-aim.js',
                'dev/js/jquery/jquery.bxslider-rahisified.js',
                'dev/js/jquery/jquery.validate.min.js',
                'dev/js/jquery/jquery.mousewheel-3.0.6.pack.js',
                'dev/js/jquery/jquery.fancybox.js',
                'dev/js/jquery/sweet-alert.js',
                'dev/js/bootstrap/alert.js',
                'dev/js/bootstrap/modal.js',
                'dev/js/bootstrap/affix.js',
                'dev/js/bootstrap/tooltip.js',
                'dev/js/bootstrap/dropdown.js',
                'dev/js/lib/maps.google.js',
                'dev/js/lib/bootstrap-select.min.js',
                'dev/js/lib/bootstrap-notify.js',
                'dev/lib/picturefill.min.js',
                'dev/js/default.js'
              ]
            }
          }
        },

        cssmin: {
          target: {
            files: [{
              expand: true,
              cwd: 'dev/css',
              src: ['styles.css'],
              dest: 'webroot/css',
              ext: '_min.css'
            }]
          }
        },

        copy: {
          main: {
            files: [
              { expand: true, cwd: 'dev/img/bg/', src: '*', dest: 'webroot/img/bg/' },
              { expand: true, cwd: 'dev/img/logos/', src: '*', dest: 'webroot/img/logos/' },
              { expand: true, cwd: 'dev/img/jquery/jquery.fancybox/', src: '*', dest: 'webroot/img/jquery/jquery.fancybox/' }
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