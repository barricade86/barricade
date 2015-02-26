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
   private $TemplateVarName=null;
   private $TemplateFilename=null;
   public function __construct($data)
   {
       $this->PageData=$data;
   }
   public function assign($templateVar,$filename)
   {
       if(!file_exists($filename))
       {
           die("This view does not exist");
       }
       $this->TemplateFilename=$filename;
       $this->TemplateVarName=$templateVar;
   }
   public function  display()
   {
       eval("\$".$this->TemplateVarName."=\$this->PageData;");
       include $this->TemplateFilename;
   }
}