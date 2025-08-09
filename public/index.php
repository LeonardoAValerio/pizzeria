<?php

require __DIR__ . '/../vendor/autoload.php';

use DI\Container;
use Slim\Factory\AppFactory;

$container = new Container;
AppFactory::setContainer($container);
$app = AppFactory::create();

(require __DIR__ . '/../src/Routes/pizzaRoutes.php')($app);

$app->run();

?>