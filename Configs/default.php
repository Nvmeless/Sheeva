<?php 

$configs = [
    "debug" => true,
    "constants" => [
        "VIEWS_PATH" => "../Views/",
    ],
    "database" => [
        'server_name' => '127.0.0.1',
        'db_name' => 'sheeva',
        'charset' => 'UTF-8',
        'port' => '3306',
        'username' => 'top-coach',
        'password' => 'top-coach',
    ]
];
define("SHEEVA_CONFIGS", $configs);
unset($configs);