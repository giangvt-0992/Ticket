<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;
class SendMailController extends Controller
{
    //
    public function SendEmail()
    {
        $data = ['email' => 'vu.tuan.giang@sun-asterisk.com', 'viewName' => 'emails.welcome', 'subject' => 'test sendmail'];
        Mail::to($data['email'])->send(new SendEmail($data)) ;
        return "Your email has been sent successfully";
    }
}
