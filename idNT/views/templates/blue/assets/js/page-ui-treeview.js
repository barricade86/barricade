var App = (function () {

  App.treeView = function( ){
    'use strict'

    $('label.tree-toggler').click(function () {
      var icon = $(this).children(".fa");
        if(icon.hasClass("fa-folder-o")){
          icon.removeClass("fa-folder-o").addClass("fa-folder-open-o");
        }else{
          icon.removeClass("fa-folder-open-o").addClass("fa-folder-o");
        }        
        
      $(this).parent().children('ul.tree').toggle(300,function(){
        $(this).parent().toggleClass("open");
        $(".tree .nscroller").nanoScroller({ preventPageScrolling: true });
      });
    });
    
  };

  return App;
})(App || {});
