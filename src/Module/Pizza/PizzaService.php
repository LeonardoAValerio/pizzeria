<?php

namespace App\Module\Pizza;
use App\Module\Pizza\Pizza;
class PizzaService {
    public function fetchAll() {
        return Pizza::all();
    }

    public function fetch(int $id) {
        return Pizza::find($id);
    }

    public function create(array $data) {
        return Pizza::create($data);
    }
}

?>