<?php

use Zend\Diactoros\ServerRequestFactory;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Diactoros\Response\SapiEmitter;
use Zend\Diactoros\Response\JsonResponse;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

### Initialization

$request = ServerRequestFactory::fromGlobals();

### Preprocessing
//$request->getBody();

### Action

$path = $request->getUri()->getPath();

if ($path === '/') {
    $name = $request->getQueryParams()['name'] ?? 'Guest';
    $response = (new HtmlResponse('Hello, ' . $name . '!'));
} elseif ($path === '/about') {
    $response = (new HtmlResponse('I am simple site'));
} elseif ($path === '/blog') {
    $response = new JsonResponse([
        ['id' => 2, 'title' => 'The Second Post'],
        ['id' => 2, 'title' => 'The Second Post'],
    ]);
} elseif (preg_match('#^/blog/(?P<id>\d+)$#i', $path, $matches)) {
    $id = $matches['id'];
    if ($id > 2) {
        $response = new JsonResponse(['error' => 'Undefined page'], 404);
    } else {
        $response = new JsonResponse(['error' => $id, 'title' => 'Post #' . $id]);
    }
}


### Postprocessing

$response = $response->withHeader('X-Developer', 'SeldomHappy')
    ->withHeader('X-Powered-By', 'Paulo');

### Sending

$sender = new SapiEmitter();
$sender->emit($response);