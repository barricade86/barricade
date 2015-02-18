<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.02.2015
 * Time: 15:04
 */
  require_once '../models/news.php';
  $news=isset($_GET['id'])?(GetNewsById($_GET['id'])):(getAllNews());
  if(!isset($_GET['id']))
  {
    require_once '../views/news_view.php';
  }
  else
  {
    require_once '../views/show_news.php';
  }