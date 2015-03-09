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
  catch(E404Exception $err404)
  {
      $view=new View();
      $ErrMessage=$err404->getMessage();
      $view->assign('ErrMessage',$ErrMessage);
      $template='ErrPages/404Err.php';
      $view->display($template);
  }
  catch (PDOException $dbe)
  {
      $view=new View();
      $DbErrMessage=$dbe->getMessage();
      $view->assign('DbError',$DbErrMessage);
      $template='ErrPages/403Err.php';
      $view->display($template);
  }
  catch(Exception $e)
  {
        die('Something was wrong.See details in log file');
  }
