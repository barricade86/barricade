<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 24.02.15
 * Time: 16:41
 */
 require_once './autoload.php';
 $ControllerName=isset($_GET['ctrl'])?($_GET['ctrl'].'Controller'):('NewsController');
 $ActionName=isset($_GET['act'])?($_GET['act']):('All');
 //var_dump($ControllerName);
 //var_dump($ActionName);
 $method='action'.$ActionName;
 $controller=new $ControllerName();
 $controller->$method();
