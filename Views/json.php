<?php
$time =  new DateTime();
$client = new \GuzzleHttp\Client();
header('Content-Type: application/json');

$datas['infos'] = [
    'code' => $_SERVER['REDIRECT_STATUS'],
    'timestamp' => $time->getTimestamp()
];


echo json_encode($datas);
