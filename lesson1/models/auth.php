<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.02.2015
 * Time: 13:11
 */
    require_once '../configs/CommonConf.php';
    require_once '../configs/AuthConf.php';
    require_once '../functions/db.php';
    require_once '../functions/common.php';
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
    /*Разлогинивание пользователя*/
    function logout()
    {
        if(isset($_COOKIE['usercookie']))
        {
            setcookie('usercookie','',COOKIE_KILL_TIME);
        }
        session_destroy();
    }