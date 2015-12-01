<?php
 namespace App\controllers;
 use App\models\News;
 use App\includes\View;
 use App\includes\E404Exception;
 include __DIR__.'/../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
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
         //echo 'header='.$record->NewsHeader;
         $view->assign('item',$record);
         $template='news/news_edit_view.php';
         $view->display($template);
         //header('Location: ./index.php');
     }
     public function actionAdd()
     {

         if(!isset($_POST['NewsHeader']) || !isset($_POST['NewsPreview']) || !isset($_POST['NewsText']) || !isset($_POST['NewsTags']))
         {
             header("HTTP/1.0 404 Not Found");
             throw new E404Exception('Required params can not be null');
         }
         $NewsRecord=new News();
         $NewsRecord->NewsHeader=$_POST['NewsHeader'];
         $NewsRecord->NewsPreview=$_POST['NewsPreview'];
         $NewsRecord->NewsText=$_POST['NewsText'];
         $NewsRecord->NewsTags=$_POST['NewsTags'];
         $NewsRecord->publishdate='NOW()';
         $NewsRecord->insert();
         $mail=new \PHPMailer();
         $mail->isSMTP();
         $mail->Host='smtp.gmail.com';
         $mail->Username='';
         $mail->Password='';
         $mail->SMTPAuth = true;
         $mail->SMTPSecure = 'ssl';
         $mail->Port = '465';
         $mail->addAddress('shilov.kirill.transas@gmail.com');
         $mail->Body='Created news';
         $mail->AltBody='Body created';
         $mail->send();
         $mail->clearAddresses();
         header('Location: ./index.php');
     }
     public function actionKill()
     {
         $id=isset($_GET['id']) ? (int)$_GET['id'] : null;
         if(is_null($id))
         {
             header("HTTP/1.0 404 Not Found");
             throw new E404Exception('Requested param cannot be null');
         }
         $NewsRecord=new News();
         $NewsRecord->NewsId=$id;
         $NewsRecord->delete();
         header('Location: ./index.php');
     }
     public function actionUpdate()
     {
         if(!isset($_GET['id']))
         {
             header("HTTP/1.0 404 Not Found");
             throw new E404Exception('Requested param cannot be null');
         }
         if(!isset($_POST['NewsHeader']) || !isset($_POST['NewsPreview']) || !isset($_POST['NewsText']) || !isset($_POST['NewsTags']))
         {
             header("HTTP/1.0 404 Not Found");
             throw new E404Exception('Required params can not be null');
         }
        $NewsRecord=new News();
        $NewsRecord->NewsHeader=$_POST['NewsHeader'];
        $NewsRecord->NewsPreview=$_POST['NewsPreview'];
        $NewsRecord->NewsText=$_POST['NewsText'];
        $NewsRecord->NewsTags=$_POST['NewsTags'];
        $NewsId=(int)$_GET['id'];
        $NewsRecord->WHERE=[':NewsId'=>$NewsId];
        $NewsRecord->update();
         header('Location: ./index.php');
     }
 }
