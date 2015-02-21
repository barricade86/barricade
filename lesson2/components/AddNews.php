<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21.02.2015
 * Time: 16:49
 */
    require_once '../models/News.php';
    $header=isset($_POST['header'])?($_POST['header']):(null);
    $preview=isset($_POST['preview'])?($_POST['preview']):(null);
    $text=isset($_POST['newstext'])?($_POST['newstext']):(null);
    $tags=isset($_POST['tags'])?($_POST['tags']):(null);
    $News_Obj=new News();
    if(is_null($header) || is_null($preview) || is_null($text) || is_null($tags))
    {
        $msg="Вы не заполнили необходимые поля";
        return;
    }
    $msg=($News_Obj->CreateRecord($header,$preview,$text,$tags)>0)?("Новость добавлена"):("Произошла ошибка при добавлении новости");
    header("Location: ../public/index.php");
