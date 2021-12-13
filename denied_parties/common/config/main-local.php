<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=deniedparties-v2.c2jerag7gydq.us-east-1.rds.amazonaws.com;dbname=official_assent',
            'username' => 'dp_user',
            'password' => 'frjesqNFBhdFp6EYdZdT',
            'charset' => 'utf8',
        ],
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
            'enableSession' => true,
            'loginUrl' => 'https://deniedparties.assentcompliance.com/?r=site/login',
            'identityCookie' => [
                'name' => '_drozone-ERP',
                'httpOnly' => true,
                'domain' => '.deniedparties.assentcompliance.com'
            ],
        ],
        'session' => [
            'name' => 'drozone-ERP',
            'cookieParams' => [
                'domain' => '.deniedparties.assentcompliance.com',
                'httpOnly' => true,
            ],
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
	    'useFileTransport' => false,
	    'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'email-smtp.us-east-1.amazonaws.com',
                'username' => 'AKIAIYP7MY2PGVCAN2DA',
                'password' => 'At4PdFU5BtfIBOoU++IxComaWF69iTQK2Z3we9yj7D3F',
                'port' => '587',
                'encryption' => 'tls',
            ],
        ],
    ],
];
