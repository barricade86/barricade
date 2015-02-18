<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 18.02.2015
 * Time: 18:37
 */
 $header=isset($_POST['header'])?($_POST['header']):(null);
 $preview=isset($_POST['preview'])?($_POST['preview']):(null);
 $text=isset($_POST['newstext'])?($_POST['newstext']):(null);
 $tags=isset($_POST['tags'])?($_POST['tags']):(null);
 if(CreateNews($header,$preview,$text,$tags)>0)
 {
     $msg="Новость добавлена";
 }