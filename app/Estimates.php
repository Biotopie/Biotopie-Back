<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estimates extends Model {
    protected $table = "estimates";
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = false;

    const ID = "id";
    const EMAIL = "email";
    const DATE = "date";
    const NAMESOCIETY = "nameSociety";

    protected $fillable = [
        "id", "email", "date", "nameSociety"
    ];
}
