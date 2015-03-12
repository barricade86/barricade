<?php
  class Db
  {
     private $DbParams;
     protected static $DbInstance;
     protected static $PdoLink;
     private $CLassName;
     private function __construct()
     {
         $DbParams=include __DIR__.'/../configs/DbConf.php';
         $ConnectionString='mysql:host='.$DbParams['DbHost'].';dbname='.$DbParams['DbName'];
         self::$PdoLink=new PDO($ConnectionString,$DbParams['DbUser'],$DbParams['DbPass']);
         if(!self::$PdoLink)
         {
             throw new PDOException();
         }
     }
     public function setClassName($Class)
     {
         $this->CLassName=$Class;
     }
     public static function GetDbInstance()
     {
       if(null===self::$DbInstance)
       {
           self::$DbInstance=new Db();
       }
       return self::$DbInstance;
     }
     public function GetQuery($SqlText,$Params=[])
     {
         $query=self::$PdoLink->prepare($SqlText);
         if(!$query)
         {
             throw new DbException();
         }
         if(!$query->execute($Params))
         {
             throw new DbException();
         }
         $result=$query->fetchAll(PDO::FETCH_CLASS,$this->CLassName);
         if(!$result)
         {
             return false;
         }
         return $result;
     }
     public function InsertQuery($SqlText,$Params)
     {
         $query=self::$PdoLink->prepare($SqlText);
         if(!$query)
         {
             throw new PDOException();
         }
         if(!$query->execute($Params))
         {
             throw new PDOException();
         }
         return self::$PdoLink->lastInsertId();
     }
     public function UpdateOrDeleteQuery($SqlText,$Params=[])
     {
         $query=self::$PdoLink->prepare($SqlText);
         $query->execute($Params);
         return $query->rowCount();
     }
  }