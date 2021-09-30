<?php

header('Content-Type: application/json');
$datas = [
    'datas' => $datas,
    'metadatas' => [
        'code' => $_SERVER['REDIRECT_STATUS'],
        'timestamp' => time(),
        'timezone' => date_default_timezone_get(),
        'version' => "1.0.0.0"
    ]
];

echo json_encode($datas);
