<?php

use common\helper\HelperFunction;
use yii\helpers\ArrayHelper;

$databases = include __DIR__ . '/db.php';

$main = [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'timeZone' => 'Asia/Ho_Chi_Minh',
    'modules' => [
        'pdfjs' => [
            'class' => '\yii2assets\pdfjs\Module',
        ],
        'rbac' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu',
            'mainLayout' => '@backend/views/layouts/main.blade',
        ],
        'settings' => [
            'class' => 'yii2mod\settings\Module',
        ],
    ],
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
        ],
        'settings' => [
            'class' => 'yii2mod\settings\components\Settings',
        ],
        'cache' => [
            #'class' => 'yii\caching\FileCache',
            'class' => 'yii\redis\Cache',
            'keyPrefix' => HelperFunction::getDomain() . '_'
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => REDIS_HOST,
            'port' => REDIS_PORT,
            'database' => 0,
            'retries' => 1,
        ],
        'i18n' => [
            'translations' => [
                'yii2mod.settings' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@yii2mod/settings/messages',
                ],
            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
//        'db' => [
//            'class' => 'yii\db\Connection',
//            'dsn' => 'mysql:host=127.0.0.1;dbname=vietau',
//            'username' => 'sauem',
//            'password' => 123,
//            'charset' => 'utf8',
//            'enableSchemaCache' => true,
//            // Duration of schema cache.
//            'schemaCacheDuration' => 3600,
//            // Name of the cache component used to store schema information
//            'schemaCache' => 'cache',
//            'queryCache' => 'cache',
//        ]
    ],
];

$components = array_merge($main['components'], $databases);
$main['components'] = $components;
$main['components']['db'] = ArrayHelper::getValue($databases, HelperFunction::getHost());
if (\Yii::$app instanceof \yii\console\Application) {
    \Yii::$container->set('mdm\admin\components\Configs', [
        'db' => ArrayHelper::getValue($databases, HelperFunction::getHost()),
    ]);
}
//HelperFunction::printf($components);
return $main;
