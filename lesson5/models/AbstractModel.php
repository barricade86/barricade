<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 03.03.15
 * Time: 20:06
 */
/*
 $Updates=["What"=>[],Clause=>[":NewsId=>2]]
 *
 */
abstract class AbstractModel
{
    protected static $table;
    protected $WhatData=[];
    private $RecId;
    public function __set($name,$value)
    {
        $this->WhatData[$name]=$value;
    }
    public function __get($name)
    {
        return $this->WhatData[$name];
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
        $cols=implode(',',array_keys($this->WhatData));
        foreach(array_keys($this->WhatData) as $fields)
        {
            $ins[]=':'.$fields;
        }
        $values=implode(',',$ins);
        Db::GetDbInstance()->setClassName($class);
        $SqlText='INSERT INTO '.static::$table.' ('.$cols.') VALUES ('.$values.')';
        $this->RecId=Db::GetDbInstance()->InsertQuery($SqlText,array_combine($ins,array_values($this->WhatData)));
        return $this->RecId;
    }
    public function update()
    {
        $class=get_called_class();
        Db::GetDbInstance()->setClassName($class);
        $SqlText='UPDATE '.static::$table.' SET ';
        $UpdateClause=array_pop($this->WhatData);
        $cols=array_keys($this->WhatData);
        $upd=[];
        foreach($cols as $col)
        {
            $SqlText.=$col.'=:'.$col.',';
            $upd[]=':'.$col;
        }
        $SqlText=substr($SqlText,0,-1);
        $SqlText.=' WHERE '.str_replace(':','',key($UpdateClause)).'='.key($UpdateClause);
        Db::GetDbInstance()->UpdateOrDeleteQuery($SqlText,array_combine($upd,array_values($this->WhatData)));
    }
    public function delete()
    {
        $class=get_called_class();
        Db::GetDbInstance()->setClassName($class);
        $columnname=':'.key($this->WhatData);
        $SqlText='DELETE FROM '.static::$table.' WHERE '.key($this->WhatData).'='.$columnname;
        Db::GetDbInstance()->UpdateOrDeleteQuery($SqlText,[$columnname=>current($this->WhatData)]);
    }
}