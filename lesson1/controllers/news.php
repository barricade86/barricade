<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.02.2015
 * Time: 15:04
 */
  session_start();
  require_once '../models/news.php';
  $news=getAllNews();
  require_once '../views/news_view.php';
