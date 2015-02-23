<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23.02.2015
 * Time: 0:24
 */
 require_once __DIR__.'/../models/AuthUser.php';
 require_once __DIR__.'/../classes/Error.php';
 $err=new Error();
 if(empty($_POST['login']) || empty($_POST['pass']))
 {
     $ErrText="Вы не заполнили необходимые поля";
     echo $ErrText;
     $err->SetError($ErrText);
 }
 $login=isset($_POST['login'])?($_POST['login']):(null);
 $password=isset($_POST['pass'])?($_POST['pass']):(null);
 $remember=isset($_POST['remember'])?($_POST['remember']):(null);
 $AuthObj=new AuthUser();
 //Если логин и пароль верны, то логинимся
 if($AuthObj->CheckAuthParams($login,$password))
 {
     $AuthObj->login($login,$password);
     header("Location: ./news.php");
 }
 else
 {
     $ErrMessage="Неверный логин или пароль";
     $err->SetError($ErrMessage);
     header("Location: ../index.php");
 }