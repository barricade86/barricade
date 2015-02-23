<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 21.02.2015
 * Time: 14:06
 */
require_once '../classes/Db.php';
require_once '../classes/Article.php';
class News extends Article
{
   private $RecTitle;
   private $RecPreview;
   private $RecText;
   private $RecTags;
   private static $DbInstance;
   public function __construct(/*$RecTitle,$RecPreview,$RecText,$RecTags*/)
   {
      /*$this->RecTitle=$RecTitle;
      $this->RecPreview=$RecPreview;
      $this->RecText=$RecText;
      $this->RecTags=$RecTags;*/
       $ConnectParams=include '../includes/DbConf.php';
       self::$DbInstance=new Db($ConnectParams['DbHost'],$ConnectParams['DbUser'],$ConnectParams['DbPass'],$ConnectParams['DbName']);
   }
   //Создание новости
   public function CreateRecord($RecTitle,$RecPreview,$RecText,$RecTags)
   {
       $this->RecTitle=$RecTitle;
       $this->RecPreview=$RecPreview;
       $this->RecText=$RecText;
       $this->RecTags=$RecTags;
       $SqlTest="INSERT INTO news(NewsId,NewsHeader,NewsPreview,NewsText,tags,publishdate) VALUES(null,'".$this->RecTitle."','".$this->RecPreview."','".$this->RecText."','".$this->RecTags."',NOW())";
       return self::$DbInstance->ModifyQuery($SqlTest);
   }
   //Получения списка новостей
   public static function GetAllRecords()
   {
       $SqlText="SELECT NewsId,newsHeader,NewsPreview,NewsText,tags,publishdate FROm news ORDER BY publishdate DESC";
       return Db::GetQueryResult($SqlText);
   }
   //Получение конкретной новости
   public function GetRecordById($RecId)
   {
       $SqlText="SELECT NewsId,newsHeader,NewsPreview,NewsText,tags,publishdate FROm news WHERE NewsId=".$RecId;
       return Db::GetQueryOneRow($SqlText);
   }
   //Правка новости
   public function UpdateRecord($RecId,$ParamsArr)
   {
       $SqlText="UPDATE news SET ";
       foreach($ParamsArr as $ParamName=>$ParamValue)
       {
           $SqlText.=$ParamName."=".$ParamValue;
       }
       $SqlText.=" WHERE NewsId=".$RecId;
       return self::$DbInstance->ModifyQuery($SqlText);
   }
}