<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'mysql:host=172.19.0.3;dbname=humhub',
      'username' => 'humhub',
      'password' => 'humhub',
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.gmail.com',
        'username' => 'tranthanhviettybg@gmail.com',
        'password' => 'zbuvwpyrkwefdmxg',
        'encryption' => 'ssl',
        'port' => ' 465 ',
      ),
    ),
    'cache' => 
    array (
      'class' => 'yii\\caching\\FileCache',
      'keyPrefix' => 'humhub',
    ),
    'formatter' => 
    array (
      'defaultTimeZone' => 'Asia/Ho_Chi_Minh',
    ),
    'formatterApp' => 
    array (
      'defaultTimeZone' => 'Asia/Ho_Chi_Minh',
      'timeZone' => 'Asia/Ho_Chi_Minh',
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => '172.19.0.3',
        'installer_database' => 'humhub',
      ),
    ),
    'config_created_at' => 1626691221,
    'horImageScrollOnMobile' => '1',
    'databaseInstalled' => true,
    'installed' => true,
  ),
  'name' => 'VietBook',
  'language' => 'en-GB',
  'timeZone' => 'Asia/Ho_Chi_Minh',
); ?>