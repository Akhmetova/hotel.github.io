<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php'; 
$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'layout' => 'template',
	'language'=>'ru-RU',
	
	'sourceLanguage'=>'ru-RU',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'fofjsdfjsd',
			'baseUrl' => '',
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
            'host' => 'smtp.mail.ru', //вставляем имя или адрес почтового сервера
            'username' => 'elyabest-94@mail.ru', 
            'password' => '04081994e',
            'port' => '465',
            'encryption' => 'ssl',
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
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
				'' => 'my/index', 
				'catalog' => 'my/catalog',
				'listproducts' => 'my/listproducts',
				'product' => 'my/product',
				'sauna' => 'my/sauna',
				'services' => 'my/services',
				'booking' => '/products/index',
				'maps' => 'my/maps',
				'/reservation' => '/booking/create',
            ],

			//'normalizer' => [
			//'class' => 'yii\web\Urlnormalizer',
			//'action' => yii\web\Urlnormalizer::ACTION_REDIRECT_PERMANENT,
			//],
        ],
    ],
	'controllerMap' => [
        'elfinder' => [
			'class' => 'mihaildev\elfinder\PathController',
			'access' => ['@'],
			'root' => [
				'path' => 'upload/global',
				'name' => 'Global'
			],
		],
		'migrate' => [
            'class' => 'yii\console\controllers\MigrateController',
            'migrationTable' => 'backend_migration',
        ],
    ],
    'params' => $params,
	'modules' => [
        'kingofsite' => [
            'class' => 'app\modules\kingofsite\kingofsite',
			'layout' => 'template',
			
        ],
		'yii2images' => [
            'class' => 'rico\yii2images\Module',
            //be sure, that permissions ok 
            //if you cant avoid permission errors you have to create "images" folder in web root manually and set 777 permissions
            'imagesStorePath' => 'upload/store', //path to origin images
            'imagesCachePath' => 'upload/cache', //path to resized copies
            'graphicsLibrary' => 'GD', //but really its better to use 'Imagick' 
            'placeHolderPath' => '@webroot/upload/store/no-image.png', // if you want to get placeholder when image not exists, string will be processed by Yii::getAlias
            'imageCompressionQuality' => 100, // Optional. Default value is 85.
        ],
	],
		'aliases' => [
			'@adminlte/widgets'=>'@vendor/adminlte/yii2-widgets',
			
			'@bower' => '@vendor/bower-asset',
			'@npm'   => '@vendor/npm-asset',
			],
			
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
   //  $config['bootstrap'][] = 'debug';
   //  $config['modules']['debug'] = [
   //      'class' => 'yii\debug\Module',
   //      // uncomment the following to add your IP if you are not connecting from localhost.
  //       'allowedIPs' => ['*'],
  //   ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['31.207.254.193'],
    ];
}

return $config;
