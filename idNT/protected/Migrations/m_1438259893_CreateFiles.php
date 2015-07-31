<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1438259893_CreateFiles
    extends Migration
{

    public function up()
    {
        $this->createTable('files',['__source_id'=>['type'=>'int'],
                                    '__user_id'=>['type'=>'int'],
                                    'fileSource'=>['type'=>'string'],
                                    'fileDest'=>['type'=>'string'],
                                    'published'=>['type'=>'datetime'],
                                    'periodStart'=>['type'=>'datetime'],
                                    'periodEnd'=>['type'=>'datetime'],
                                    'paramType'=>['type'=>'int']
        ]);
    }

    public function down()
    {
        $this->dropTable('files');
    }

}