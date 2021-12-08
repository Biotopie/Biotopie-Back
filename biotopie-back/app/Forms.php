<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forms extends Model {
    protected $table = "forms";
    protected $primaryKey = "id";
    public $incrementing = true;

    const ID = "id";
    const NAME_SOCIETY = "nameSociety";
    const SOCIAL_REASON = "socialReason";
    const HEADQUARTER = "headquarter";
    const REPRESENTING = "representing";
    const PHONE_NUMBER = "phoneNumber";
    const EMAIL = "email";
    const DATE = "date";

    protected $fillable = [
        "id", "nameSociety", "socialReason", "headquarter", "representing", "phoneNumber", "email", "date"
    ];
}
