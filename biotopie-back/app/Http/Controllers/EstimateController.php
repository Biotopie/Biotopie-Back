<?php

namespace App\Http\Controllers;

use App\Services\RequeteService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;

class EstimateController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function handleGetSimulation(Request $request){
        $body = json_decode($request->getContent(), true);
        $idFormule = RequeteService::getFormuleId($body['formule']);
        $allModulesData = $body['modules']['items'];
        $modulesName = [];
        foreach($allModulesData as $modules) {
            $modulesName[] = strtolower($modules['content']);
        }
        $idModules = RequeteService::getModulesId($modulesName);
        $newEstimate = RequeteService::createEstimate($body['email'], $body['nameSociety']);

        foreach($idModules as $idModule) {
            RequeteService::createEstimateFormuleModule($newEstimate['id'], $idFormule['id'], $idModule['id']);
        }
        return $request;
    }
}
