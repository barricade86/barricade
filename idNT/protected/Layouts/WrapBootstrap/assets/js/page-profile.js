var App = (function () {

  App.pageProfile = function( ){
    'use strict'

    $(".spk4").sparkline([2,4,3,6,7,5,8,9,4,2,10,], { type: 'bar', width: '200px', barWidth: 6, height: '50px',barColor: '#19B698'});
    $(".spk5").sparkline([5,3,5,6,5,7,4,8,6,9,8,], { type: 'bar', width: '80px', barWidth: 6, height: '50px',barColor: '#E85647'});

    // Change this to the location of your server-side upload handler:
    var url =  App.conf.assetsPath + '/' + App.conf.libsPath + '/jquery.upload/server/php/index.php';
    var jcrop;
    var timg, iurl;
    
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                timg = file.name;
                iurl = file.url;
                $(".crop-image").html('<img src="' + App.conf.assetsPath + '/' + App.conf.libsPath +  '/jquery.upload/server/php/files/' + file.name + '" />');
                $('#progress').fadeOut();
                
                //Crop Image
                $(".crop-image img").Jcrop({
                  aspectRatio: 1
                },function(){
                  jcrop = this;
                });
            });
            
            $("#crop-image").niftyModal();
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress').fadeIn();
            $('#progress').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput).parent().addClass($.support.fileInput ? undefined : 'disabled');
    
    $("#save-image").click(function(){
      var c = jcrop.tellSelect();
      //console.log(jcrop.tellSelect());
      if( c.w != 0 ){
        $(".profile-avatar").attr("src", App.conf.assetsPath + '/' + App.conf.libsPath + '/jquery.crop/server/crop.php?src=' + iurl + '&x=' + c.x + '&y=' + c.y + '&w=' + c.w + '&h=' + c.h );
        $("#crop-image").niftyModal('hide');
      }else{
        alert("Please select a crop region then press save.");
      }
    });
    
  };

  return App;
})(App || {});
