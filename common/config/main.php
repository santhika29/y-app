<?php
use kartik\datecontrol\Module;
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views' => '@app/views/user',
                ],
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-red',
                ],
            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
        ],
    ],
    'modules' => [
        'gridview' => ['class' => '\kartik\grid\Module',],
        'datecontrol' => [
            'class' => '\kartik\datecontrol\Module',
            'displaySettings' => [
                Module::FORMAT_DATE => 'dd-mm-yyyy',
                Module::FORMAT_TIME => 'hh:mm:ss a',
                Module::FORMAT_DATETIME => 'dd-mm-yyyy hh:mm:ss a',
            ],
            'saveSettings' => [
                Module::FORMAT_DATE => 'php:U',
                Module::FORMAT_TIME => 'php:H:i:s',
                Module::FORMAT_DATETIME => 'php:Y-m-d H:i:s',
            ],
            'autoWidget' => true,
            'autoWidgetSettings' => [
                Module::FORMAT_DATE => ['type' => 2, 'pluginOptions'=> ['autoclose' => true]],
                Module::FORMAT_TIME => [],
                Module::FORMAT_DATETIME => [],
            ],
            'widgetSettings' => [
                Module::FORMAT_DATE => [
                    'class' => 'kartik\widget\DatePicker',
                    'options' => [
                        'dateFormat' => 'php:d-M-y',
                        'options' => ['class' => 'form-control'],
                    ],
                ],     
            ], 
        ],
        'user' => [
            'class' => '\dektrium\user\Module',
            'enableRegistration' => false,
            'enableUnconfirmedLogin' => true,
            'enableConfirmation'=> false,
            'cost' => 12,
            'admins' => ['santhika','admin'],
        ],
        'admin' =>[
            'class' => 'mdm\admin\Module',
            'layout' => 'left-menu',
        ],
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            'admin/*',
            'gii/*',
            'debug/*',
            '*'
            //'some-controller/some-action',
            // The actions listed here will be allowed to everyone including guests.
            // So, 'admin/*' should not appear here in the production, of course.
            // But in the earlier stages of your development, you may probably want to
            // add a lot of actions here until you finally completed setting up rbac,
            // otherwise you may not even take a first step.
        ]
    ],
];
