<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.02.2015
 * Time: 16:40
 */
 abstract class Article
 {
     protected static function getAll()
     {
         return null;
     }
     protected static function getOne($Id)
     {
         return null;
     }
     abstract protected function CreateRecord($header,$PreviewText,$FullText,$SearchTags);
 }