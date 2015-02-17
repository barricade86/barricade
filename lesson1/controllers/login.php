<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.02.2015
 * Time: 13:58
 */
    session_start();
    require_once '../models/auth.php';
    $ErrMessage=null;
    //var_dump(isset($_POST['remember']));
    if(empty($_POST['login']) or empty($_POST['pass']))
    {
        $ErrMessage='Вы не заполнили необходимые поля';
        SetError($ErrMessage);
        header("location: auth_form.php");
        exit;
    }
    else
    {
        $login=$_POST['login'];
        $password=$_POST['pass'];
    }
    $remember=$_POST['remember'];
    //var_dump($auth);
    if(CheckLoginParams($login,$password))
    {
        $_SESSION['auth_result']='ok';
        login($login,$remember);
        header('Location: ./news.php');
    }
    else
    {
        $_SESSION['auth_result']='error';
        $ErrMessage='Неверный логин или пароль';
        SetError($ErrMessage);
        header('Location: ./index.php');
    }
