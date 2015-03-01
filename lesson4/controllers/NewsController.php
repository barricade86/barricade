<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 01.03.2015
 * Time: 18:20
 */

class NewsController
{
   public function __construct()
   {

   }
   public function actionGetAll()
   {
       $NewsItems=News::getAll();
       $ViewObj=new View();
       $ViewObj->assign('items',$NewsItems);
       $template='news/news_view.php';
       $ViewObj->display($template);
   }
   public function actionGetOne()
   {
      $RecId=isset($_GET['id'])?(int)$_GET['id']:null;
      $Item=News::getOne($RecId);
      $ViewObj=new View();
      $ViewObj->assign('item',$Item);
      $template='news/news_one_view.php';
      $ViewObj->display($template);
   }
}