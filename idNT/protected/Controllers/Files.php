<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 30.07.15
 * Time: 18:28
 */

namespace App\Controllers;

use T4\Orm\Controller;
use App\Models\File;

class Files extends Controller{

    public function actionEdit($id=null)
    {
        if(null===$id || 'new'===$id)
        {
            $this->data->item=new File();
        }
        else
        {
            $this->data->item=File::findByPK($id);
        }
    }

    public function actionSave()
    {

    }
}