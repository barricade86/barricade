<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.02.2015
 * Time: 22:10
 */
 session_start();
 require_once '../models/news.php';
 if(isset($_GET['action']) && $_GET['action']=='add')
 {
    require '../controllers/postnews.php';
 }
 require_once '../views/news_form.php';