<?php

namespace App\Module\Pizza;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model {
    protected $table = "pizza";
    protected $fillable = ["name", "price"];
    public $timestamps = false;

}

?>