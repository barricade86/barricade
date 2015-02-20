<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 20.02.15
 * Time: 15:19
 */

class Db
{
    private $db_host;
    private $db_user;
    private $db_pass;
    private $db_name;
    private static $db_conn_handler;
    private $QueryResult=[];
    public function __construct($dbhost,$dbuser,$dbpass,$dbname)
    {
        $this->db_host=$dbhost;
        $this->db_user=$dbuser;
        $this->db_pass=$dbpass;
        $this->db_name=$dbname;
        self::$db_conn_handler=new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
        return (self::$db_conn_handler->connect_error)?(true):(false);
    }
    //Метод для получения массива результатов
    public function GetQueryResult($SqlString)
    {
        $result=self::$db_conn_handler->query($SqlString);
        if(!$result)
        {
            return null;
        }
        while($row=$result->fetch_array(MYSQL_ASSOC))
        {
            $this->QueryResult[]=$row;
        }
        return $this->QueryResult;
    }
    //Метод для получения одной строки из запроса
    public function GetQueryOneRow($SqlString)
    {
        $this->QueryResult[]=self::$db_conn_handler->query($SqlString)->fetch_array(MYSQL_ASSOC);
        return array_pop($this->QueryResult);
    }
    public function ModifyQuery($SqlString)
    {

        return self::$db_conn_handler->query($SqlString);
        //return self::$db_conn_handler->query($SqlString)->affected_rows;
    }
    /*public function __destruct()
    {
        self::$db_conn_handler->close();
    }*/
}
$Db=new Db('localhost','stonecold','6539xZF9kTNc','devastator');

