<?php
  function __autoload($ClassName)
  {
      if(file_exists(__DIR__.'/models/'.$ClassName.'.php'))
      {
          require __DIR__.'/models/'.$ClassName.'.php';
      }
      elseif(file_exists(__DIR__.'/controllers/'.$ClassName.'.php'))
      {
          require __DIR__.'/controllers/'.$ClassName.'.php';
      }
      elseif(file_exists(__DIR__.'/classes/'.$ClassName.'.php'))
      {
          require __DIR__.'/classes/'.$ClassName.'.php';
      }
      elseif(file_exists(__DIR__.'/interfaces/'.$ClassName.'.php'))
      {
          require __DIR__.'/interfaces/'.$ClassName.'.php';
      }
  }