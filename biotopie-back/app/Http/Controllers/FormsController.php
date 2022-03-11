<?php

namespace App\Http\Controllers;

use App\Services\RequeteService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Request;

class FormsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function handleGetContactForm(MailController $mail, Request $request){
        $body = json_decode($request->getContent(), true);
        $date = date('Y-m-d H:i:s');
        $newForm = RequeteService::createForms($body['nameSociety'], $body['email'], $body['subject'], $body['content'], $date);
        $mail->contact_email($body['nameSociety'], $body['email'], $body['subject'], $body['content']);
        return $request;
    }


}
