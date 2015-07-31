<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 30.07.15
 * Time: 1:06
 */

namespace App\Controllers;

use T4\Mvc\Controller;
use App\Models\Source;
use App\Models\File;


class Sources extends Controller{

    public function actionDefault()
    {
        $this->data->items=Source::findAll();
    }

    public function actionEdit($id=null)
    {
        if(null === $id || 'new'=== $id)
        {
            $this->data->item=new File();
        }
        else
        {
            $this->redirect('/sources/default/');
        }
    }

    public function actionSave()
    {
        $item=new File();
        $periodStart=date('Y-m-d',strtotime($this->app->request->post->periodStart));
        $periodEnd=date('Y-m-d',strtotime($this->app->request->post->periodEnd));
        $this->app->request->post->periodStart=$periodStart;
        $this->app->request->post->periodEnd=$periodEnd;
        $item->fill($this->app->request->post);
        $item->save();
        $this->redirect('/sources/default/');
    }
}