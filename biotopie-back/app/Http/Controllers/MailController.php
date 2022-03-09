<?php

namespace App\Http\Controllers;

use App\Services\RequeteService;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function basic_email($mail, $modules, $formule) {
        $formule = RequeteService::getFormuleData($formule);
        $priceModule = 0;
        $moduleName = [];
        foreach($modules as $module) {
            $moduleData = RequeteService::getModuleData($module['id']);
            $priceModule = $priceModule + $moduleData['price'];
            $moduleName[] = $moduleData['name'];
        }
        $price = $formule['price'] + $priceModule;
        $formule = $formule['name'];
        file_put_contents('debug.txt', print_r($formule, TRUE), FILE_APPEND);
        file_put_contents('debug.txt', print_r($moduleName, TRUE), FILE_APPEND);
        Mail::send(['text'=>'emails.template'], ['price' => $price, 'formule' => $formule, 'module' => $moduleName], function($message) use ($mail) {
            $message->to($mail, $mail);
            $message->subject('Estimation de devis');
            $message->from('biotopie@gmail.com','BIOTOPIE');
        });
        echo "Basic Email Sent. Check your inbox.";
    }
}
