<?php

use Slim\App;
use App\Module\Pizza\PizzaController;

return function (App $app) {
    $app->get('/pizza', [PizzaController::class, 'index']);
}

?>