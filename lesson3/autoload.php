<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 25.02.15
 * Time: 11:47
 */
 function __autoload($class)
 {
     if(file_exists(__DIR__.'/controllers/'.$class.'.php'))
     {
         require_once __DIR__.'/controllers/'.$class.'.php';
     }
     elseif(file_exists(__DIR__.'/classes/'.$class.'.php'))
     {
         require_once __DIR__.'/classes/'.$class.'.php';
     }
     elseif(file_exists(__DIR__.'/models/'.$class.'.php'))
     {
         require_once __DIR__.'/models/'.$class.'.php';
     }
 }