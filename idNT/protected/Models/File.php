<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 30.07.15
 * Time: 15:51
 */

namespace App\Models;

use T4\Orm\Model;

class File extends Model
{
    protected static $schema = ['table' => 'files',
        'columns' => [
            'fileSource' => ['type' => 'string'],
            'fileDest'=>['type'=>'string'],
            'published'=>['type'=>'datetime'],
            'periodStart' => ['type' => 'datetime'],
            'periodEnd' => ['type' => 'datetime'],
            'paramType'=>['type'=>'int']
        ],
        'relations' => [
            'sources' => ['type' => self::BELONGS_TO, 'model' => Source::class],
            'users' => ['type' => self::BELONGS_TO, 'model' => User::class]
        ]
    ];

}