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
        $email = strtolower($body['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) return response()->json('mail',403);
        if ($email === "" || $body['nameSociety'] === "" || $body['subject'] === "" || $body['content'] === "") return response()->json('champs',403);
        $date = date('Y-m-d H:i:s');
        RequeteService::createForms($body['nameSociety'], $email, $body['subject'], $body['content'], $date);
        $mail->contact_email($body['nameSociety'], $email, $body['subject'], $body['content']);
        return response($request, 200);
    }


}
