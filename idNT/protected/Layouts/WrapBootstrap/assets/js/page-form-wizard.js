var App = (function () {

  App.wizard = function( ){
    'use strict'

    //Fuel UX
    $('.wizard-ux').wizard();

    $('.wizard-ux').on('changed.fu.wizard',function(){
      //Bootstrap Slider
      $('.bslider').slider();
    });
    
    $(".wizard-next").click(function(e){
      var id = $(this).data("wizard");
      $(id).wizard('next');
      e.preventDefault();
    });
    
    $(".wizard-previous").click(function(e){
      var id = $(this).data("wizard");
      $(id).wizard('previous');
      e.preventDefault();
    });

    //Bootstrap Switch init
    $('.switch').bootstrapSwitch();

    //Select2
    $(".select2").select2({
      width: '100%'
    });

    //Select2 Tags
    $(".tags").select2({tags: 0,width: '100%'});
  };

  return App;
})(App || {});
