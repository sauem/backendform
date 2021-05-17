<?php

use common\helper\HelperFunction;
use yii\helpers\ArrayHelper;

$databases = include __DIR__ . '/db.php';
Yii::$container->set('mdm\admin\components\Configs', [
    'db' => ArrayHelper::getValue($databases, HelperFunction::getHost()),
]);

$main = [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'timeZone' => 'Asia/Ho_Chi_Minh',
    'modules' => [
        'rbac' => [
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu',
            'mainLayout' => '@backend/views/layouts/main.blade'
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
    ],
];

$components = array_merge($main['components'], $databases);
$main['components'] = $components;
$main['components']['db'] = ArrayHelper::getValue($databases, HelperFunction::getHost());
//HelperFunction::printf($components);
return $main;
