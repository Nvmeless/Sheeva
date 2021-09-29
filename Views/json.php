<?php
$time =  new DateTime();
$datas['infos'] = [
    'code' => '',
    "method" => '',
    'timestamp' => $time->getTimestamp()
];


echo json_encode($datas);
