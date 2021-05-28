<?php
require __DIR__ . '/const.php';
$rules = require __DIR__ . '/rules.php';
$params = array_merge(
    require __DIR__ . '/../../../common/config/params.php',
    require __DIR__ . '/params.php'
);

return [
    'id' => 'frontend-janami',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'janami\controllers',
    'language' => 'vi-VN',
    'timeZone' => 'Asia/Ho_Chi_Minh',
    'layout' => 'main.blade',
    'components' => [
        'view' => [
            'class' => 'yii\web\View',
            'renderers' => [
                'blade' => [
                    'class' => '\cyneek\yii2\blade\ViewRenderer',
                    'cachePath' => '@runtime/blade_cache',
                ],
            ],
        ],
        'cache' => [
            #'class' => 'yii\caching\FileCache',
            'class' => 'yii\redis\Cache',
            'keyPrefix' => 'lucycosmeticcom_'
        ],
        'request' => [
            'enableCookieValidation' => true,
            'enableCsrfValidation' => false,
            'csrfParam' => '_csrf-frontend',
            'cookieValidationKey' => 't-X35MSnjfnpwc60yDvcbsNisYIJ8pqK',
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'vietau-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'as access' => [
            'class' => 'mdm\admin\components\AccessControl',
            'allowActions' => [
                //'site/*',
                //'rbac/*',
            ]
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => $rules
        ],
        'errorHandler' => [
            'class' => 'yii\web\ErrorHandler',
            'errorAction' => 'site/error'
        ],
    ],
    'params' => $params,
];
