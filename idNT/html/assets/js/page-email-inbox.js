var App = (function () {

  App.emailInbox = function( ){
    'use strict'

    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue checkbox',
      radioClass: 'icheckbox_square-blue'
    });
    
    $("#check-all").on('ifChanged',function(){
      var checkboxes = $(".mails").find(':checkbox');
      if($(this).is(':checked')) {
          checkboxes.iCheck('check');
      } else {
          checkboxes.iCheck('uncheck');
      }
    });
    
  };

  return App;
})(App || {});
