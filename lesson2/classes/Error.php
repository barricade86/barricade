<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23.02.2015
 * Time: 15:26
 */

class Error
{
   public function __construct()
   {

   }
   public function SetError($ErrText)
   {
       $_SESSION['error']=$ErrText;
   }
   public static function GetError()
   {
      return isset($_SESSION['error'])?($_SESSION['error']):(null);
   }
}
