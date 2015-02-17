<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.02.2015
 * Time: 14:31
 */
require_once '../configs/config.php';
//Функция соединения с базой данных
function DbConnect()
{
    $connect=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
    if(!$connect || !mysql_select_db(DB_NAME))
    {
        return false;
    }
    else
    {
        return $connect;
    }
}
//Функция для получения одной строки из запроса
function GetOneRow($SqlText)
{
    $result=[];
    $Connect=DbConnect();
    if(!$Connect)
    {
        SetError('Ошибка при установке соединения к базе данных');
        return null;
    }
    $QueryHandler=mysql_query($SqlText);
    if(!$QueryHandler)
    {
        SetError('Ошибка при выполнении запроса');
        return null;
    }
    if(mysql_num_rows($QueryHandler)==0)
    {
        return null;
    }
    while(($row=mysql_fetch_array($QueryHandler,MYSQL_ASSOC))!==false)
    {
        $result[]=$row;
    }
    mysql_close($Connect);
    return array_pop($result);
}
/*Функция для получения массива из базы данных*/
function GetQueryResult($SqlText)
{
    $result=[];
    $Connect=DbConnect();
    if(!$Connect)
    {
        SetError('Ошибка при установке соединения к базе данных');
        return null;
    }
    $QueryHandler=mysql_query($SqlText);
    if(!$QueryHandler)
    {
        SetError('Ошибка при выполнении запроса');
        return null;
    }
    if(mysql_num_rows($QueryHandler)==0)
    {
        return null;
    }
    while(($row=mysql_fetch_array($QueryHandler,MYSQL_ASSOC))!==false)
    {
        $result[]=$row;
    }
    mysql_close($Connect);
    return $result;
}
/*Функция для исполнения модифицирующего данные запроса*/
function ModifyQueryResult($SqlText)
{
    $Connect=DbConnect();
    if(!$Connect)
    {
        SetError('Ошибка при установке соединения к базе данных');
        return null;
    }
    $QueryHandler=mysql_query($SqlText);
    if(!$QueryHandler)
    {
        SetError('Ошибка при выполнении запроса');
        return null;
    }
    mysql_close($ConnectHandler);
    return mysql_affected_rows();
}