<?php
$defaults = [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=host;dbname=dbname',
    'username' => 'username',
    'password' => 'password',
    'charset' => 'utf8',
];

// настройки локальной машины
$path_local = __DIR__ . '/db.local.php';

if(file_exists($path_local)) {
    $defaults = \yii\helpers\ArrayHelper::merge($defaults, require $path_local);
}

return $defaults;
