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
         $NewsHeader=isset($_POST['NewsHeader']) ? ($_POST['NewsHeader']) : null;
         $NewsPreview=isset($_POST['NewsPreview']) ? ($_POST['NewsPreview']) : null;
         $NewsText=isset($_POST['NewsText']) ? ($_POST['NewsText']) : null;
         $NewsTags=isset($_POST['NewsTags']) ? ($_POST['NewsTags']) : null;
         $news=new News();
         $result=$news->CreateRecord($NewsHeader,$NewsPreview,$NewsText,$NewsTags);
         header('Location: ./index.php?block=News&action=getAll');
     }
 }