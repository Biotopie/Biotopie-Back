<?php

namespace App\Services;

use App\Forms;

class RequeteService {

    static public function createForms($nameSociety, $headquarter, $representing, $phoneNumber, $email, $date) {
        return Forms::create([
            "nameSociety" => $nameSociety,
            "headquarter" => $headquarter,
            "representing" => $representing,
            "phoneNumber" => $phoneNumber,
            "email" => $email,
            "date" => $date
        ]);
    }

    static public function createEstimate($email, $formula, $modules, $date, $nameSociety) {
        return Forms::create([
            "email" => $email,
            "formula" => $formula,
            "modules" => $modules,
            "date" => $date,
            "nameSociety" => $nameSociety
        ]);
    }
}
