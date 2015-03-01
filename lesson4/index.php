<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.02.2015
 * Time: 15:59
 */
 require_once './autoload.php';
 $ControllerName=isset($_GET['block'])? $_GET['block'].'Controller' :'NewsController';
 $Action=isset($_GET['action']) ? $_GET['action'] : 'GetAll';
 $method='action'.$Action;
 $controller=new $ControllerName();
 $controller->$method();
