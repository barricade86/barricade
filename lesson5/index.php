<?php
  require './autoload.php';
  $controller=isset($_GET['controller']) ? $_GET['controller'].'Controller' : 'NewsController';
  $action=isset($_GET['action']) ? $_GET['action'] : 'All';
  $ctrl=new $controller();
  $method='action'.$action;
  $ctrl->$method();