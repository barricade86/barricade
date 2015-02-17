<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.02.2015
 * Time: 13:11
 */
require_once '../functions/db.php';
/*Функция проверки корректности логина и пароля*/
function CheckLoginParams($login,$password)
{
    $pass=crypt($password,SALT_VALUE);
    $SqlText="SELECT username,password FROm users WHERE username='".$login."' AND password='".$pass."'";
    $result=GetOneRow($SqlText);
    if(!is_null($result))
    {
        if($login==$result['username'] && $pass==$result['password'])
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
}
/*Залогинивание пользователя*/
function login($login,$remember)
{
    $_SESSION['auth_name']=$login;
    if($remember==true)
    {
        setcookie('usercookie',$login,COOKIE_LIFE_TIME);
    }
    return true;
}
/*Получение имени пользователя*/
function GetLoginedUsername()
{
    return isset($_COOKIE['usercookie'])?($_COOKIE['usercookie']):($_SESSION['auth_name']);
}
/*Инициализация ошибки*/
function SetAuthError($ErrText)
{
    $_SESSION['error']=$ErrText;
}
/*Считывание текста ошибки*/
function GetAuthError()
{
    return isset($_SESSION['error'])?($_SESSION['error']):(null);
}
/*Разлогинивание пользователя*/
function logout()
{
    if(isset($_COOKIE['usercookie']))
    {
        setcookie('usercookie','',COOKIE_KILL_TIME);
    }
    session_destroy();
}