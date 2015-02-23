<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 23.02.2015
 * Time: 14:47
 */
 session_start();
 require_once './models/AuthUser.php';
 require_once './classes/Error.php';
 $username=AuthUser::GetLoginUsername();
 require_once './views/auth_form.php';



