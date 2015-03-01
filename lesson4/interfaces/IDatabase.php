<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.02.2015
 * Time: 15:23
 */
 interface IDatabase
 {
     public static function GetDbInstance();
     public function getQueryResultArray($SqlText);
     public function getOneRow($SqlText);
     public function ModifyQuery($SqlText);
 }