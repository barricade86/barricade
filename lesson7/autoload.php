<?php
  use App\includes\E404Exception;
  function __autoload($ClassName)
  {
      $ClassPath=explode('\\',$ClassName);
      $ClassPath[0]=__DIR__;
      $path=implode(DIRECTORY_SEPARATOR,$ClassPath).'.php';
      //var_dump($path);
      if(file_exists($path))
      {
          require $path;
      }
      else
      {
          throw new E404Exception('Page '.$ClassName.' does not exists');
      }
  }
  spl_autoload_register('__autoload');