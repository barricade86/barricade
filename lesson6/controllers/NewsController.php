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
        if($items==false)
        {
            header("HTTP/1.0 404 Not Found");
            throw new E404Exception('News cannot be found');
        }
        $view=new View();
        $view->assign('items',$items);
        $template='news/news_view.php';
        $view->display($template);
    }
    public function actionOne()
    {
        $id=isset($_GET['id']) ? (int)$_GET['id'] : null;
        //Если id статьи не задан, то извещаем об этом
        if(is_null($id))
        {
            header("HTTP/1.0 404 Not Found");
            throw new E404Exception('Id cannot be null');
        }
        $item=News::findOne($id);
        //Если не найдено статьи с соответствующим id,то сообщаем об этом
        if($item==false)
        {
            header("HTTP/1.0 404 Not Found");
            throw new E404Exception('Record not found');
        }
        $view=new View();
        $view->assign('item',$item);
        $template='news/news_one_view.php';
        $view->display($template);
    }
}