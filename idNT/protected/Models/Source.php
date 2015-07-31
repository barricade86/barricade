<?php
/**
 * Created by PhpStorm.
 * User: barricade
 * Date: 30.07.15
 * Time: 0:56
 */

namespace App\Models;

use T4\Orm\Model;


class Source extends Model
{
    const SOURCE_TYPE=[
                        'DISTRIBUTOR'=>1,
                        'PHARMACY'=>2
    ];
    protected static $schema = ['table' => 'sources',
        'columns' => ['title' => ['type' => 'string'],
                      'published' => ['type' => 'datetime'],
                      'sourceType' => ['type' => 'int']
        ],
        'relations' => [
            'files' => ['type' => self::HAS_MANY, 'model' => File::class]
        ]
    ];

    public function getSourcesByType($sourceType)
    {
        return self::findAll([
                                'where'=>'sourceType=:sourceType',
                                'params'=>[
                                    ':sourceType'=>self::SOURCE_TYPE[$sourceType]
                                ],
                                'order'=>self::PK
        ]);
    }
}