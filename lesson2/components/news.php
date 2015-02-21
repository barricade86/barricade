<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21.02.2015
 * Time: 15:25
 */
 require_once '../models/News.php';
 $NewsObj=new News();
 $news=!isset($_GET['id'])?($NewsObj->GetAllRecords()):($NewsObj->GetRecordById($_GET['id']));
 //Если в адресной строке нам скармливают id новости
 if(isset($_GET['id']))
 {
   require_once '../views/show_news_view.php';
 }
 else
 {
    require_once '../views/news_view.php';
 }
