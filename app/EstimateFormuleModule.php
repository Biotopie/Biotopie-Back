<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstimateFormuleModule extends Model {
    protected $table = "estimateformulemodule";
    protected $primaryKey = "id";
    public $timestamps = false;

    const ID = "id";
    const ID_ESTIMATE = "id_estimate";
    const ID_FORMULE = "id_formule";
    const ID_MODULE = "id_module";

    protected $fillable = [
        "id", "id_estimate", "id_formule", "id_module"
    ];
}
