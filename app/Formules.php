<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formules extends Model {
    protected $table = "formules";
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
