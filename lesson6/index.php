<?php
  require './autoload.php';
  $controller=isset($_GET['controller']) ? $_GET['controller'].'Controller' : 'NewsController';
  $action=isset($_GET['action']) ? $_GET['action'] : 'All';
  try
  {
      $ctrl=new $controller();
      $method='action'.$action;
      $ctrl->$method();
  }
  catch (PDOException $dbe)
  {
      die('Something wrong with DB'.$dbe->getMessage());
  }
  catch(Exception $e)
  {
        die('Something was wrong.See details in log file'.$e->getMessage());
  }
