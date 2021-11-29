<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Selective\BasePath\BasePathMiddleware;
use Slim\Factory\AppFactory;

require_once __DIR__.'/../vendor/autoload.php';
require_once '../src/services/ilivreserviceimpl.php';

$app = AppFactory::create();

// Add Slim routing middleware
$app->addRoutingMiddleware();
$livres= new LivreService();

// Set the base path to run the app in a subdirectory.
// This path is used in urlFor().
$app->add(new BasePathMiddleware($app));

$app->addErrorMiddleware(true, true, true);

// Define app routes
$app->get('/', function (Request $request, Response $response) {
    
    $response->getBody()->write('data','bonjour');
    return $response;
})->setName('root');

// Run app
$app->run();