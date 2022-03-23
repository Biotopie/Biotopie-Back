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
    const EMAIL = "email";
    const SUBJECT = "subject";
    const CONTENT = "content";  
    const DATE = "date";

    protected $fillable = [
        "id", "nameSociety", "email", "subject", "content", "date"
    ];
}
