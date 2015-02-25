<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 25.02.15
 * Time: 15:33
 */

class View
{
   private $PageData=null;
   public function __construct($data)
   {
       $this->PageData=$data;
   }
   public function  display($filename)
   {
       if(!file_exists($filename))
       {
           die("This view does not exist");
       }
       include $filename;
   }
}