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
        return $response;
    }

    public function show(Request $request, Response $response, array $args)
    {
        $id = $args['id'];
        $response->getBody()->write(json_encode($this->service->fetch($id)));
        return $response;
    }

    public function create(Request $request, Response $response) {
        $data = $request->getParsedBody();
        $response->getBody()->write(json_encode($this->service->create($data)));
        return $response;
    }

    public function updateById(Request $request, Response $response, array $args) {
        $id = $args['id'];
        $data = $request->getParsedBody();
        $response->getBody()->write(json_encode($this->service->update($id, $data)));
        return $response;
    }

    public function delete(Request $request, Response $response, array $args) {
        $id = $args['id'];
        $response->getBody()->write(json_encode($this->service->delete($id)));
        return $response;
    }
}

?>