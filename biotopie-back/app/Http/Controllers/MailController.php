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

        Mail::send(['text'=>'emails.template'], ['price' => $price, 'formule' => $formule, 'module' => $moduleName], function($message) use ($mail) {
            $message->to($mail, $mail);
            $message->subject('Estimation de devis');
            $message->from('biotopie@gmail.com','BIOTOPIE');
        });
        echo "Basic Email Sent. Check your inbox.";
    }

    public function contact_email($nameSociety, $mail, $subject, $content) {
        Mail::send(['text'=>'emails.contact_template'], ['nameSociety' => $nameSociety, 'mail' => $mail, 'subject' => $subject, 'content' => $content], function($message) use ($mail) {
            $message->to('romain.axilais@ynov.com','BIOTOPIE');
            $message->subject('Nouvelle demande de contact');
            $message->from('biotopie@gmail.com', $mail);
        });
        echo "Contact Email Sent. Check your inbox.";
    }
}
