<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 22.02.2015
 * Time: 12:40
 */
require_once __DIR__.'/../includes/AuthConf.php';
require_once __DIR__.'/../classes/Db.php';
class AuthUser
{
    private static $DbInstance;
    private $DbConnect;
    public function __construct()
    {
        $this->LoginParams= include __DIR__.'/../includes/DbConf.php';
        self::$DbInstance=new Db($this->LoginParams["DbHost"],$this->LoginParams["DbUser"],$this->LoginParams["DbPass"],$this->LoginParams["DbName"]);
    }
    public function CheckAuthParams($login,$password)
    {
       $pass=crypt($password,SALT_VALUE);
       $SqlText="select username,password from users WHERE username='".$login."' AND password='".$pass."'";
       $AuthParams=self::$DbInstance->GetQueryOneRow($SqlText);
       return ($AuthParams["username"]==$login && $AuthParams["password"]==$pass)?(true):(false);
    }
    public function login($user,$remember=null)
    {
        if(!is_null($remember))
        {
            setcookie('user',$user,COOKIE_LIFE_TIME);
        }
        else
        {
            $_SESSION['user']=$user;
        }
    }
    public static function GetLoginUsername()
    {
       $user=null;
       if(isset($_COOKIE['user']))
       {
           $user=$_COOKIE['user'];
       }
       if(isset($_SESSION['user']))
       {
           $user=$_SESSION['user'];
       }
       return $user;
    }
    public function logout()
    {
        if(isset($_COOKIE['user']))
        {
            setcookie('user',null,COOKIE_KILL_TIME);
        }
        session_destroy();
    }
}