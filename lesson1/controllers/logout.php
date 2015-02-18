<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.02.2015
 * Time: 15:13
 */
    session_start();
    require_once '../models/auth.php';
    logout();
    header('Location: ../public/index.php');