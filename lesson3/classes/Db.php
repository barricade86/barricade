<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 24.02.15
 * Time: 14:07
 */
error_reporting(E_ALL);
class Db
{
   private static $DbInstance=null;
   private $ConnectParams;
   private static $MysqlConnHandler=null;
   public static function GetDbInstance()
   {
     if(null===self::$DbInstance)
     {
         self::$DbInstance=new Db();
     }
     return self::$DbInstance;
   }
   private function __construct()
   {
        $this->ConnectParams=include __DIR__.'/../configs/DbConf.php';
        self::$MysqlConnHandler=new mysqli($this->ConnectParams['DbHost'],$this->ConnectParams['DbUser'],$this->ConnectParams['DbPass'],$this->ConnectParams['DbName']);
   }
   public function GetQueryResultArray($SqlStr)
   {
      $QueryArray=[];
      $result=self::$MysqlConnHandler->query($SqlStr);
      while($row=$result->fetch_array(MYSQL_ASSOC))
      {
          $QueryArray[]=$row;
      }
      return $QueryArray;
   }
   public function GetOneRow($SqlStr)
   {
       $Record=$this->GetQueryResultArray($SqlStr);
       return array_pop($Record);
   }
   public function ModifyQuery($SqlText)
   {
       self::$MysqlConnHandler->query($SqlText);
       return self::$MysqlConnHandler->affected_rows;
   }
}