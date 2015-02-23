<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21.02.2015
 * Time: 15:25
 */
 require_once __DIR__."/../models/AuthUser.php";
 require_once __DIR__.'/../models/News.php';
 $NewsObj=new News();
 //$news=!isset($_GET['id'])?($NewsObj->GetAllRecords()):($NewsObj->GetRecordById($_GET['id']));
 $news=News::GetAllRecords();
 if(!is_null(AuthUser::GetLoginUsername()))
 {
   $User='Welcome '.AuthUser::GetLoginUsername();
 }
 else
 {
    header("Location: ../index.php");
 }
 require_once '../views/news_view.php';
 //Если в адресной строке нам скармливают id новости
 /*if(isset($_GET['id']))
 {
   require_once '../views/show_news_view.php';
 }
 else
 {
    require_once '../views/news_view.php';
 }*/
