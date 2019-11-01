<?php
$db = new yii\db\Connection([
   'dsn' => 'mysql:host=localhost;dbname=poni',
   'username' => 'poni', 
   'password' => 'QWEasd123',
   'charset' => 'utf8',
]); 
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],

];
