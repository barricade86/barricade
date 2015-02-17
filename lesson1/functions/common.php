<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.02.2015
 * Time: 20:32
 */
    /*Получение имени пользователя*/
    function GetLoginedUsername()
    {
        return isset($_COOKIE['usercookie'])?($_COOKIE['usercookie']):($_SESSION['auth_name']);
    }
    /*Инициализация ошибки*/
    function SetError($ErrText)
    {
        $_SESSION['error']=$ErrText;
    }
    /*Считывание текста ошибки*/
    function GetError()
    {
        return isset($_SESSION['error'])?($_SESSION['error']):(null);
    }