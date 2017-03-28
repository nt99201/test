'use strict';

module.exports = function(grunt) {
    grunt.initConfig({
        ftpush: {
          build: {
            auth: {
              host: 'view.ui.naver.com',
              port: '2001',
              authKey: 'key1'
            },
            src: 'src',
            dest: '<%= grunt.config.get(\'ftp_dest.path\') %>',
            exclusions: ['.DS_Store', 'Thumbs.db', '.*', '*.log'],
            keep: []
          }
        },

        image_resize: {
          options: {
              width: 50,
              overwrite: true
          },
          files: {
              'img/sp_common.gif': 'src/img/sp_common_pc.gif'
          }
        }
    });

  grunt.loadNpmTasks('grunt-contrib-ftpush');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-image-resize');

  grunt.registerTask('ftp', ['gitBranchCheck','ftpush']);
  grunt.registerTask('resize', ['image_resize']);

  grunt.registerTask('gitBranchCheck', function() {
    var ftp_root        = '/dict/xdic/'; //ftp 서비스 폴더명 넣어주세요
    var ftp_desc        = '';
    var branch_name     = '';
    var branch_name_all = '';
    var push_branch     = '';
    var build_file_path = '.grunt/ftpush/';
    var build_file_dest = build_file_path;
    var build_file_org  = build_file_path + 'build.json';
    var build_file_chk  = build_file_path + 'build_check.txt';
    var build_file_list = [];
    var done            = this.async();
    
    grunt.util.spawn({
      cmd: 'git',
      args: ['branch']
    }, function (err, res) {
      if (err) {
        grunt.fail.fatal(err);
      } else {
        branch_name = res.stdout.match(/\* (.)+/);
        branch_name = branch_name[0].replace(/\* /, '');
        ftp_desc = ftp_root + branch_name;
        branch_name_all = res.stdout.replace('*', '').split(/\n/);

        grunt.config.set('ftp_dest', {path:ftp_desc});
        console.log('Upload Remote Folder : ' + grunt.config.get('ftp_dest.path'));

        if(!grunt.file.exists(build_file_path)){
          grunt.file.mkdir(build_file_path);
        }

        grunt.file.recurse(build_file_path, function(abspath, rootdir, subdir, filename){
          build_file_list.push(filename);
        });

        for(var i=0, cnt=branch_name_all.length; i<cnt; i++){
          branch_name_all[i] = branch_name_all[i].replace(/^\s*|\s*$/g, '') + '_build.json';
        }
        branch_name_all.push('build.json');
        branch_name_all.push('build_check.txt');
        
        for(var i=0, cnt=build_file_list.length; i<cnt; i++){
          if(branch_name_all.indexOf(build_file_list[i]) == -1){
            grunt.file.delete(build_file_path + build_file_list[i]);
          }
        }

        build_file_dest += (branch_name + '_build.json');

        if(grunt.file.exists(build_file_chk)){
          push_branch = grunt.file.read(build_file_chk);
          grunt.file.write(build_file_chk, branch_name);
        }else{
          grunt.file.write(build_file_chk, branch_name);
          push_branch = grunt.file.read(build_file_chk);
        }

        if(grunt.file.exists(build_file_org)){
          grunt.file.read(build_file_org);
        }else{
          grunt.file.write(build_file_org, '{}');
        }

        if(push_branch != branch_name){
          grunt.file.copy(build_file_org, build_file_path + push_branch + '_build.json');

          if(grunt.file.exists(build_file_dest)){
            grunt.file.copy(build_file_dest, build_file_org);
          }else{
            grunt.file.write(build_file_dest, '{}');
            grunt.file.write(build_file_org, '{}');
          }
        }
      }

      done();
    });
  });
};
