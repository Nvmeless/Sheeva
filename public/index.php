<?php
require '../vendor/autoload.php';
require '../Configs/default.php';

define("VIEWS_PATH", "../Views/");

$api = new \Sheeva\Api();
$config = new \Sheeva\ConfigBuilder();
$api->run()->call;
$api->render();
