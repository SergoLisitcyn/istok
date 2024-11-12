<?php

use yii\caching\FileCache;

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'jodit' => 'yii2jodit\JoditModule',
        'extensions'=>['jpg','png','gif'],
        'root'=> '@webroot/uploads/images',
        'baseurl'=> '@web/uploads/images',
        'maxFileSize'=> '20mb',
        'defaultPermission'=> 0775,
    ],
    'components' => [
        'cache' => [
            'class' => FileCache::class,
        ],
    ],
];
