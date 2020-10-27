<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'name' => 'PP-Admin',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'aaRuvF2xNaM3sp25e7HTdv-jTGRbkd2d'
            //'baseurl'=>'http://cms2.posttoday.com/events/test_cc'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'encryption' => 'tls',
                'host' => 'smtp.googlemail.com',
                'port' => '587',
                'username' => 'bpinventory.test@gmail.com',
                'password' => 'bpiv2020',
            ],  
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
        // 'db' => $db,
        'db' => [
        
            'class' => 'yii\db\Connection',
            'dsn' => !strpos($_SERVER['REQUEST_URI'],'heroku') ? 'mysql:host=127.0.0.1;dbname=postdigital_ptd' : 'mysql:host=us-cdbr-east-02.cleardb.com;dbname=heroku_d18bfef1a27cdf7',
            'username' => !strpos($_SERVER['REQUEST_URI'],'heroku') ? 'postdigital_ptd' : 'b3036e28d41b04',
            'password' => !strpos($_SERVER['REQUEST_URI'],'heroku') ? 'Thahxay8' : '97b98c1c',
            'charset' => 'utf8',
        
            // Schema cache options (for production environment)
            //'enableSchemaCache' => true,
            //'schemaCacheDuration' => 60,
            //'schemaCache' => 'cache',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'admin/index',
                '<action>'=>'site/<action>',
            ],
        ],
        'assetManager' => [ //SETTING FOR MATERIAL DASHBOARD THEME
            'bundles' => [
                'deyraka\materialdashboard\web\MaterialDashboardAsset',
            ],
        ],
        'session' => [

            'class' => 'yii\web\Session',
    
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV && strpos($_SERVER['REQUEST_URI'],'heroku') && strpos($_SERVER['REQUEST_URI'],'cms2.accordionposttoday') ) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
