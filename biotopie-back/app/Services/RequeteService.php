<?php

namespace App\Services;

use App\EstimateFormuleModule;
use App\Estimates;
use App\Forms;
use App\Formules;
use App\Modules;
use Carbon\Carbon;

class RequeteService {

    static public function createForms($nameSociety, $email, $subject, $content, $date) {
        return Forms::create([
            "nameSociety" => $nameSociety,
            "email" => $email,
            "subject" => $subject,
            "content" => $content,
            "date" => $date
        ]);
    }

    static public function getFormuleId($name) {
        return Formules::select(Formules::ID)->where(Formules::NAME, $name)->get()->first();
    }

    static public function getModulesId($names) {
        return Modules::select(Modules::ID)->whereIn(Modules::NAME, $names)->get();
    }

    static public function getFormuleData($id) {
        return Formules::select(Formules::PRICE, Formules::NAME)->where(Formules::ID, $id)->get()->first();
    }

    static public function getModuleData($id) {
        return Modules::select(Modules::PRICE, Modules::NAME)->where(Modules::ID, $id)->get()->first();
    }

    static public function createEstimate($email, $nameSociety) {
        return Estimates::create([
            "email" => $email,
            "date" => Carbon::now(),
            "nameSociety" => $nameSociety
        ]);
    }

    static public function createEstimateFormuleModule($estimate, $formule, $module) {
        return EstimateFormuleModule::create([
            "id_estimate" => $estimate,
            "id_formule" => $formule,
            "id_module" => $module
        ]);
    }
}
