<?php

use Slim\App;
use App\Module\Pizza\PizzaController;

return function (App $app) {
    $app->get('/pizza', [PizzaController::class, 'index']);
    $app->get('/pizza/{id:[0-9+]}', [PizzaController::class, 'show']);
    $app->post('/pizza', [PizzaController::class,'create']);
    $app->put("/pizza/{id:[0-9+]}", [PizzaController::class,'updateById']);
    $app->delete("/pizza/{id:[0-9+]}", [PizzaController::class,'delete']);
}

?>