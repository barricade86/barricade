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
         $news=News::getAllRecords();
         $View=new View($news);
         $file=__DIR__.'/../views/news/news_view.php';
         $View->display($file);
     }
     public function actionOne()
     {
         $id=isset($_GET['id'])?($_GET['id']):(null);
         $item=News::getOneRec($id);
         $file=__DIR__ . '/../views/news/news_one_view.php';
         $view=new View($item);
         $view->display($file);
     }
 }