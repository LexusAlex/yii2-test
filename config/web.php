<?php
return [
    'id' => 'base-yii2',
    'basePath' => dirname(__DIR__),
    // это пространство имен где приложение будет искать все контроллеры
    'controllerNamespace' => 'test\controllers',
    'aliases' => [
        '@test' => dirname(__DIR__),
    ],
    'defaultRoute' => 'test/index',
    'components' => [
        'request' => [
            'cookieValidationKey' => '123',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['admin/default/login']
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
    ],
];