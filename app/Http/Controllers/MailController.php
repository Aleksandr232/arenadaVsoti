<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Notifications\SendLetterTelegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class MailController extends Controller

{
    public function send(Request $request)
    {
        $this->validate($request, [
            'hidden' => 'required',
            'name' => 'required|min:2|max:65',
            'phone' => 'required|min:11|max:20|',
        ]);

        $body = "<p><span style='color: #3D5368'>{$request->input('hidden')}</span></p>";
        $body .= "<p><span style='color: #3D5368'>Имя клиента:</span> {$request->input('name')}</p>";
        $body .= "<p><span style='color: #3D5368'>Телефон клиента:</span> {$request->input('phone')}</p>";

        $to = explode(',', env('ADMIN_EMAILS'));
        /* Mail::to($to)->send(new SendMail($body)); */

        Notification::send($request, new SendLetterTelegram());

        return view('site.mail.send');
    }
}

