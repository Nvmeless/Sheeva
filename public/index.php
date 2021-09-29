<?php
require '../vendor/autoload.php';
require '../Configs/default.php';

define("VIEWS_PATH", "../Views/");

$api = new \Sheeva\Api();
$config = new \Sheeva\ConfigBuilder();
$api->run()->dispatch()->render();






// $client = new \GuzzleHttp\Client();
// $response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');
// include "../Views/header.php";
// // 
// echo $response->getStatusCode(); // 200
// echo "<br/>";
// echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
// echo "<br/>";
// echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'
// 
// Send an asynchronous request.
//http://api.music-story.com/fr/genre/search?name=Rock
// $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
// $request = new \GuzzleHttp\Psr7\Request('GET', 'http://api.music-story.com/fr/genre/search?name=Rock');
// $promise = $client->sendAsync($request)->then(function ($response) {
    // echo 'I completed! ' . $response->getBody();
// });
// 
// $promise->wait();