var App = (function () {

  App.textEditor = function( ){
    'use strict'

    //Ckeditor
    $('textarea.ckeditor').ckeditor();

    CKEDITOR.disableAutoInline = true;

    $(".inline-editable").each(function(){
      CKEDITOR.inline($(this)[0]);
    });

    $('#some-textarea').wysihtml5();

    $('#summernote').summernote({
      height: 200
    });

  };

  return App;
})(App || {});
