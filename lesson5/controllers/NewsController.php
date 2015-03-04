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
        /*echo '<pre>';
        print_r($items);
        echo '</pre>';*/
        $view=new View();
        $view->assign('items',$items);
        $template='news/news_view.php';
        $view->display($template);
    }
    public function actionOne()
    {
        $id=isset($_GET['id']) ? (int)$_GET['id'] : null;
        $item=News::findOne($id);
        //print_r($item);
        $view=new View();
        $view->assign('item',$item);
        $template='news/news_one_view.php';
        $view->display($template);
    }
}