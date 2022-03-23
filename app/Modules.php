<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modules extends Model {
    protected $table = "modules";
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = false;

    const ID = "id";
    const NAME = "name";
    const PRICE = "price";

    protected $fillable = [
        "id", "name", "price"
    ];
}
