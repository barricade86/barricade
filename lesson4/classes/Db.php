<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.02.2015
 * Time: 16:00
 */
require_once __DIR__.'/../interfaces/IDatabase.php';
class Db implements IDatabase
{
    private static $DbInstance=null;
    private static $MysqlInstance=null;
    private $QueryResult=[];
    private function __construct()
    {
        $MysqlConnectParams=include __DIR__.'/../configs/DbConf.php';
        self::$MysqlInstance=new mysqli($MysqlConnectParams["DbHost"],$MysqlConnectParams["DbUser"],$MysqlConnectParams["DbPassword"],$MysqlConnectParams["DbName"]);
    }
    public static function GetDbInstance()
    {
        if(null===self::$DbInstance)
        {
            self::$DbInstance=new Db();
        }
        return self::$DbInstance;
    }
    public function getQueryResultArray($SqlText)
    {
        $result=self::$MysqlInstance->query($SqlText);
        while($row=$result->fetch_array(MYSQL_ASSOC))
        {
            $this->QueryResult[]=$row;
        }
        return $this->QueryResult;
    }
    public function getOneRow($SqlText)
    {
        $this->QueryResult=$this->getQueryResultArray($SqlText);
        return array_pop($this->QueryResult);
    }
    public function ModifyQuery($SqlText)
    {
        self::$MysqlInstance->query($SqlText);
        return self::$MysqlInstance->affected_rows;
    }
}