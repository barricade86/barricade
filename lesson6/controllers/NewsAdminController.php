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
         $view=new View();
         $template='news/news_add_view.php';
         $view->display($template);
     }
     public function actionEdit()
     {
         $RecId=isset($_GET['id']) ? (int)$_GET['id'] : null;
         $record=News::findOne($RecId);
         $view=new View();
         echo 'header='.$record->NewsHeader;
         $view->assign('item',$record);
         $template='news/news_edit_view.php';
         $view->display($template);
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
     public function actionUpdate()
     {
        $NewsRecord=new News();
        $NewsRecord->NewsHeader=isset($_POST['NewsHeader']) ? $_POST['NewsHeader'] : null;
        $NewsRecord->NewsPreview=isset($_POST['NewsPreview']) ? $_POST['NewsPreview'] : null;
        $NewsRecord->NewsText=isset($_POST['NewsText']) ? $_POST['NewsText'] : null;
        $NewsRecord->NewsTags=isset($_POST['NewsTags']) ? $_POST['NewsTags'] : null;
        $NewsId=isset($_GET['id']) ? (int)$_GET['id'] : null;
        $NewsRecord->WHERE=[':NewsId'=>$NewsId];
        $NewsRecord->update();
         header('Location: ./index.php');
     }
 }
