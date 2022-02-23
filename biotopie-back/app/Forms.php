<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forms extends Model {
    protected $table = "forms";
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = false;

    const ID = "id";
    const NAME_SOCIETY = "nameSociety";
    const CONTENT = "content";
    const EMAIL = "email";
    const DATE = "date";

    protected $fillable = [
        "id", "nameSociety", "content", "email", "date"
    ];
}
