<?php

use yii\caching\FileCache;

$link = 'http://'.$_SERVER['SERVER_NAME'].'/frontend/web/uploads/images';
if( isset($_SERVER['HTTPS'] ) ) {
    $link = 'https://'.$_SERVER['SERVER_NAME'].'/frontend/web/uploads/images';
}

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'jodit' => [
            'class' => 'yii2jodit\JoditModule',
            'extensions'=>['jpg','png','gif'],
            'root'=> $link,
            'baseurl'=> $link,
            'maxFileSize'=> '20mb',
            'defaultPermission'=> 0775,
        ],
    ],
    'components' => [
        'cache' => [
            'class' => FileCache::class,
        ],
    ],
];
