<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.02.2015
 * Time: 15:42
 */
//echo __DIR__.'/../models/';
 function __autoload($class)
 {
     if(file_exists(__DIR__.'/models/'.$class.'.php'))
     {
         require_once __DIR__.'/models/'.$class.'.php';
     }
     /*elseif(file_exists(__DIR__.'/../interfaces/I'.$ClassName.'.php'))
     {
         require_once __DIR__.'/../interfaces/I'.$ClassName.'.php';
     }*/
     elseif(file_exists(__DIR__.'/classes/'.$class.'.php'))
     {
         require_once __DIR__.'/classes/'.$class.'.php';
     }
     elseif(file_exists(__DIR__.'/controllers/'.$class.'.php'))
     {
         require_once __DIR__.'/controllers/'.$class.'.php';
     }
 }