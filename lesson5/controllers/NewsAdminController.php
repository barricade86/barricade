<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 25.02.15
 * Time: 11:46
 */
 class NewsAdminController
 {
     public function __construct()
     {

     }
     public function actionMain()
     {
         require_once __DIR__.'/../views/news/news_add_view.php';
     }
     public function actionAdd()
     {
         $NewsRecord=new News();
         $NewsRecord->NewsHeader=isset($_POST['NewsHeader']) ? $_POST['NewsHeader'] : null;
         $NewsRecord->NewsPreview=isset($_POST['NewsPreview']) ? $_POST['NewsPreview'] : null;
         $NewsRecord->NewsText=isset($_POST['NewsText']) ? $_POST['NewsText'] : null;
         $NewsRecord->NewsTags=isset($_POST['NewsTags']) ? $_POST['NewsTags'] : null;
         $NewsRecord->publishdate='NOW()';
         $NewsRecord->insert();
         header('Location: ./index.php');
     }
     public function actionKill()
     {
         $NewsRecord=new News();
         $NewsRecord->NewsId=isset($_GET['id']) ? (int)$_GET['id'] : null;
         $NewsRecord->delete();
         header('Location: ./index.php');
     }

 }
