var App = (function () {

  App.pageSearch = function( ){
    'use strict'

    $(".datetime").datetimepicker({autoclose: true});

    $(".select2").select2({
      width: '100%'
    });
    
    $(".tags").select2({tags: 0,width: '100%'});

    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue checkbox',
      radioClass: 'iradio_square-blue'
    });
    
    $("#check-all").on('ifChanged',function(){
      var checkboxes = $(".items").find(':checkbox');
      if($(this).is(':checked')) {
          checkboxes.iCheck('check');
      } else {
          checkboxes.iCheck('uncheck');
      }
    });
    
    /*Slider update range*/
    $("#price-range").slider().on("slide",function(e){
      $("#price1").html("$" + e.value[0]);
      $("#price2").html("$" + e.value[1]);
    });
    
  };

  return App;
})(App || {});
