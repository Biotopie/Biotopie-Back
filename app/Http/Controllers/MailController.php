<?php

namespace App\Http\Controllers;

use App\Services\RequeteService;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function basic_email($mail, $modules, $formule) {
        $formule = RequeteService::getFormuleData($formule);
        $data = [];
        foreach($modules as $module) {

            $moduleData = RequeteService::getModuleData($module['id']);
            $data[] = ['name' => $moduleData['name'], 'price' => $moduleData['price']];
        }

        Mail::send(['text'=>'emails.template'], ['formulePrice' => $formule['price'], 'formule' => $formule['name'], 'moduleData' => $data], function($message) use ($mail) {
            $message->to($mail, $mail);
            $message->subject('Estimation de devis');
            $message->from('biotopie.company@gmail.com','BIOTOPIE');
        });
        echo "Basic Email Sent. Check your inbox.";
    }

    public function contact_email($nameSociety, $mail, $subject, $content) {
        Mail::send(['text'=>'emails.contact_template'], ['nameSociety' => $nameSociety, 'mail' => $mail, 'subject' => $subject, 'content' => $content], function($message) use ($mail) {
            $message->to('biotopie.company@gmail.com','BIOTOPIE');
            $message->subject('Nouvelle demande de contact');
            $message->from('biotopie.company@gmail.com', $mail);
        });
        echo "Contact Email Sent. Check your inbox.";
    }
}
