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
}