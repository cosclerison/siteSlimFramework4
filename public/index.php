<?php

use Psr\Http\Message\RequestInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require "../vendor/autoload.php";

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args){
    var_dump('home');
    // $name       = $args['name'];
    // $response->getBody()->write('hello, $name');
    return $response;
});

$app->run();