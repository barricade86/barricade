var App = (function () {

  App.codeEditor = function( ){
    'use strict'

    /*Codemirror*/
    var code = $("#code1").html();
    code = code.replace(/&lt;/g, '<');
    code = code.replace(/&gt;/g, '>');
    code = $.trim(code);

    var myCodeMirror = CodeMirror($('#console')[0], {
      lineNumbers: true,
      theme: 'ambiance',
      value: code,
      mode:  "text/html"
    });
    
    setTimeout(function(){
      myCodeMirror.refresh();
    },200);
    
  };

  return App;
})(App || {});
