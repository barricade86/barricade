<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23.02.2015
 * Time: 18:31
 */
    session_start();
    require_once __DIR__.'/../models/AuthUser.php';
    $UserObj=new AuthUser();
    $UserObj->logout();
    header('Location: ../index.php');