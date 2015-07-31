<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1438206018_CreateSources
    extends Migration
{

    public function up()
    {
        $this->createTable('sources',[
                                        'title'=>['type'=>'string'],
                                        'published'=>['type'=>'datetime'],
                                        'sourceType'=>['type'=>'int']
        ]);
        $this->insert('sources',['title'=>'Авикон','published'=>date('Y-m-d H:i:s'),'sourceType'=>1]);
        $this->insert('sources',['title'=>'Айпара','published'=>date('Y-m-d H:i:s'),'sourceType'=>2]);
        $this->insert('sources',['title'=>'Аптека-Холдинг','published'=>date('Y-m-d H:i:s'),'sourceType'=>2]);
        $this->insert('sources',['title'=>'БCС','published'=>date('Y-m-d H:i:s'),'sourceType'=>1]);
        $this->insert('sources',['title'=>'Вита-Лайн','published'=>date('Y-m-d H:i:s'),'sourceType'=>2]);
        $this->insert('sources',['title'=>'Имплюзия','published'=>date('Y-m-d H:i:s'),'sourceType'=>2]);
        $this->insert('sources',['title'=>'Катрен','published'=>date('Y-m-d H:i:s'),'sourceType'=>1]);
        $this->insert('sources',['title'=>'Витта Компани ООО','published'=>date('Y-m-d H:i:s'),'sourceType'=>1]);
    }

    public function down()
    {
        $this->dropTable('sources');
    }

}