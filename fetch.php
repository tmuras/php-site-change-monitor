<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
        'timeout'  => 2.0,
]);

$url = '';
$response = $client->get('$url');
$body = $response->getBody();
$content = $body->getContents();
$sha = sha1($content);
if(!file_exists("data/$sha")) {
    file_put_contents("data/$sha", $content);
}
$body->getSize();