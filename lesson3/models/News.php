<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 24.02.15
 * Time: 15:50
 */
 //require_once __DIR__.'/../classes/Db.php';
 class News
 {
     public function __construct()
     {

     }
     public static function getAllNews()
     {
         $SqlText="select NewsId,Newsheader,NewsPreview,Newstext,Newstags,publishdate FROM news ORDER BY publishdate DESC";
         return Db::GetDbInstance()->GetQueryResultArray($SqlText);
     }
     public static function getOneRec($id)
     {
         $SqlText="select NewsId,Newsheader,NewsPreview,Newstext,Newstags,publishdate FROM news WHERE NewsId=".$id;
         return Db::GetDbInstance()->GetOneRow($SqlText);
     }
     public function AddNews($title,$preview,$text,$tags)
     {
         $SqlText="INSERT INTO news(NewsId,NewsHeader,NewsPreview,NewsText,NewsTags,publishdate) VALUES(null,'".$title."','".$preview."','".$text."','".$tags."',NOW())";
         return Db::GetDbInstance()->ModifyQuery($SqlText);
     }
 }