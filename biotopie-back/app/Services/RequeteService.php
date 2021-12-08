<?php

namespace App\Services;

use App\Forms;

class RequeteService {

    static public function createForms($nameSociety, $socialReason, $headquarter, $representing, $phoneNumber, $email, $date) {
        return Forms::create([
            "nameSociety" => $nameSociety,
            "socialReason" => $socialReason,
            "headquarter" => $headquarter,
            "representing" => $representing,
            "phoneNumber" => $phoneNumber,
            "email" => $email,
            "date" => $date
        ]);
    }

    static public function createEstimate($email, $formula, $modules, $date) {
        return Forms::create([
            "email" => $email,
            "formula" => $formula,
            "modules" => $modules,
            "date" => $date
        ]);
    }
}
