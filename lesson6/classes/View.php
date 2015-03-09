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
   //private $vars=[];
   //private $position;
   public function __construct()
   {
       //$this->position=0;
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
   public function __set($key,$value)
   {
       die("Неизвестное свойство");
   }
   public function __get($key)
   {
       die("Чтение данных из недоступных свойств");
   }
}