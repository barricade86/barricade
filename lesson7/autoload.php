<?php
  require __DIR__.'/vendor/autoload.php';
  use App\includes\E404Exception;
  function __autoload($ClassName)
  {
      $ClassPath=explode('\\',$ClassName);
      $ClassPath[0]=__DIR__;
      $path=implode(DIRECTORY_SEPARATOR,$ClassPath).'.php';
      if(file_exists($path))
      {
          require $path;
      }
      /*else
      {
          throw new E404Exception('Page '.$ClassName.' does not exists');
      }*/
      /*if(file_exists(__DIR__.'/models/'.$ClassName.'.php'))
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
      }*/
      else
      {
          throw new E404Exception('Page '.$ClassName.' does not exists');
      }
  }