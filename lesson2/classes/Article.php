<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21.02.2015
 * Time: 13:26
 */

abstract class Article
{
   abstract protected function CreateRecord($RecTitle,$RecPreview,$RecText,$RecTags);
   protected static function GetAllRecords()
   {
      return null;
   }
   abstract protected function GetRecordById($RecId);
   abstract protected function UpdateRecord($RecId,$ParamsArr);
}