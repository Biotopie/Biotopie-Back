<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimates extends Model {
    protected $table = "estimates";
    protected $primaryKey = "id";
    public $incrementing = true;

    const ID = "id";
    const EMAIL = "email";
    const FORMULA = "formula";
    const MODULES = "modules";
    const DATE = "date";

    protected $fillable = [
        "id", "email", "formula", "modules", "date"
    ];
}
