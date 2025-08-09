<?php

namespace App\Module\Pizza;

use App\Module\Pizza\PizzaService;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class PizzaController {
    public function __construct(private PizzaService $service) {}

    public function index(Request $request, Response $response)
    {
        $response->getBody()->write(json_encode($this->service->fetchAll()));
        return $response->withHeader('Content-Type', 'application/json');
    }
}

?>