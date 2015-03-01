<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 01.03.2015
 * Time: 18:28
 */

class View
{
   private $data=[];
   public function __construct()
   {

   }
   public function assign($name,$value)
   {
       $this->data[$name]=$value;
   }
   public function display($template)
   {
       foreach ($this->data as $key=>$value)
       {
          $$key=$value;
       }
       include __DIR__.'/../views/'.$template;
   }
}