<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 26.02.15
 * Time: 11:40
 */

abstract class Article
{
    protected static function getAllRecords()
    {
        return null;
    }
    protected static function getOneRec($id)
    {
        return null;
    }
    abstract protected  function AddNews($title,$preview,$text,$tags);
}