<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 03.03.15
 * Time: 20:06
 */

abstract class AbstractModel
{
    protected static $table;
    protected $data=[];
    private $RecId;
    public function __set($name,$value)
    {
        $this->data[$name]=$value;
    }
    public function __get($name)
    {
        return $this->data[$name];
    }
    public static function findAll()
    {
        $class=get_called_class();
        $SqlText='SELECT * FROM '.static::$table;
        Db::GetDbInstance()->setClassName($class);
        return Db::GetDbInstance()->GetQuery($SqlText);
    }
    public static function findOne($id)
    {
        $class=get_called_class();
        $SqlText='SELECT * FROM '.static::$table.' WHERE NewsId=:id';
        Db::GetDbInstance()->setClassName($class);
        $result=Db::GetDbInstance()->GetQuery($SqlText,[':id'=>$id]);
        return array_pop($result);
    }
    public static function findByColumn($ParamName,$ParamValue)
    {
        $class=get_called_class();
        $SqlText='SELECT * FROM '.static::$table.' WHERE =:'.$ParamName.'='.$ParamValue;
        Db::GetDbInstance()->setClassName($class);
        $result=Db::GetDbInstance()->GetQuery($SqlText);
        return $result;
    }
    public function insert()
    {
        $class=get_called_class();
        $cols=implode(',',array_keys($this->data));
        foreach(array_keys($this->data) as $fields)
        {
            $ins[]=':'.$fields;
        }
        $values=implode(',',$ins);
        $SqlText='INSERT INTO '.static::$table.' ('.$cols.') VALUES ('.$values.')';
        $this->RecId=Db::GetDbInstance()->InsertQuery($SqlText,array_combine($ins,array_values($this->data)));
        return $this->RecId;
    }
}