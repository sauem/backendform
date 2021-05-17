<?php
$params = include __DIR__ . '/params-local.php';
$db = \yii\helpers\ArrayHelper::getValue($params, 'db');
$databases = [];
if (!empty($db)) {
    foreach ($db as $key => $item) {
        $databases[$key] = [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=' . $item['database'],
            'username' => $item['username'],
            'password' => $item['password'],
            'charset' => 'utf8',
            'enableSchemaCache' => true,
            // Duration of schema cache.
            'schemaCacheDuration' => 3600,
            // Name of the cache component used to store schema information
            'schemaCache' => 'cache',
            'queryCache' => 'cache',
        ];
    }
}
return $databases;
