<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 17.02.2015
 * Time: 15:51
 */
 require_once '../functions/db.php';

function GetAllNews()
{
    $SqlText="select NewsId,newsHeader,NewsPreview,NewsText,tags,publishdate from news ORDER BY publishdate DESC";
    return GetQueryResult($SqlText);
}
function GetNewsById($NewsId)
{
    $SqlText="select NewsId,newsHeader,NewsPreview,NewsText,tags,publishdate from news WHERE NewsId=".$NewsId;
    return GetOneRow($SqlText);
}
function CreateNews($header,$preview,$text,$tags)
{
    $SqlText="INSERT INTO news(NewsId,newsheader,NewsPreview,NewsText,tags,publishdate) VALUES (null,'".$header."','".$preview."','".$text."','".$tags."',NOW())";
    return ModifyQueryResult($SqlText);
}