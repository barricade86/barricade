<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 24.02.15
 * Time: 16:25
 */
 //require_once __DIR__.'/../models/News.php';
 class NewsController
 {
     public function __construct()
     {
         
     }
     public function actionAll()
     {
         //echo "Gun or GTFO";
         $news=News::getAllNews();
         include __DIR__ . '/../views/news/news_view.php';
     }
     public function actionOne()
     {
         $id=isset($_GET['id'])?($_GET['id']):(null);
         $item=News::getOneRec($id);
         include __DIR__ . '/../views/news/news_one_view.php';
     }
 }