<?php

require __DIR__ . '/../vendor/autoload.php';

use DI\Container;
use Slim\Factory\AppFactory;
use App\Middleware\HeadersJsonEncode;

$container = new Container;
AppFactory::setContainer($container);
$app = AppFactory::create();

$error_midleware = $app->addErrorMiddleware(true, true, true);

$error_handler = $error_midleware->getDefaultErrorHandler();

$error_handler->forceContentType('application/json');

$app->add(new HeadersJsonEncode());
$app->addBodyParsingMiddleware();

(require __DIR__ . '/../src/Routes/pizzaRoutes.php')($app);


$app->run();

?>