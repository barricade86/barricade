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
      $err=new ErrLogger('PageNotFound');
      $err->assignError($err404->getMessage().'__file:'.$err404->getFile().'__Line:'.$err404->getLine().'__Trace:'.$err404->getTraceAsString());
      $err->writeLog();
  }
  catch (PDOException $dbe)
  {
      $view=new View();
      $DbErrMessage='Произошла ошибка при работе с БД';
      $view->assign('DbError',$DbErrMessage);
      $template='ErrPages/403Err.php';
      $view->display($template);
      $err=new ErrLogger('DbError');
      $err->assignError($dbe->getMessage().'__file:'.$dbe->getFile().'__Line:'.$dbe->getLine().'__Trace:'.$dbe->getTraceAsString());
      $err->writeLog();
  }
  catch(Exception $e)
  {
        die('Something was wrong');
  }
