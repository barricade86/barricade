<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.02.2015
 * Time: 17:25
 */

class News extends Article
{
  public function __construct()
  {

  }
  public static function getAll()
  {
     $SqlText="SELECT NewsId,NewsHeader,NewsPreview,NewsText,publishdate,NewsTags FROM news ORDER BY publishdate DESC";
     return Db::GetDbInstance()->getQueryResultArray($SqlText);
  }
  public static function getOne($Id)
  {
      $SqlText="SELECT NewsId,NewsHeader,NewsPreview,NewsText,publishdate,NewsTags FROM news WHERE NewsId=".$Id;
      $QueryArr= Db::GetDbInstance()->getQueryResultArray($SqlText);
      return array_pop($QueryArr);
  }
  public function CreateRecord($header,$PreviewText,$FullText,$SearchTags)
  {
     $SqlText="INSERT INTO news (NewsId,NewsHeader,NewsPreview,NewsText,publishdate,NewsTags) VALUES(null,'".$header."','".$PreviewText."','".$FullText."',NOW(),'".$SearchTags."')";
     return Db::GetDbInstance()->ModifyQuery($SqlText);
  }
}