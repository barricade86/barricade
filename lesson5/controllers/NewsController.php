<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 03.03.15
 * Time: 21:08
 */

class NewsController
{
    public function __construct()
    {

    }
    public function actionAll()
    {
        $items=News::findAll();
    }
    public function actionOne()
    {
        $id=isset($_GET['id']) ? (int)$_GET['id'] : null;
        $item=News::findOne($id);
    }
}