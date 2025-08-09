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
        if(!$data["name"]) {
            throw new \Exception("property 'name' is necessary");
        }
        
        if(!$data["price"]) {
            throw new \Exception("property 'price' is necessary");
        }

        return Pizza::create($data);
    }

    public function update(int $id, array $data) {
        $pizza = $this->fetch($id);
        $pizza->update($data);
        return $pizza;
    }

    public function delete(int $id) {
        return Pizza::destroy($id);
    }
}

?>