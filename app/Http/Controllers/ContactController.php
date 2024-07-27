<?php

namespace App\Http\Controllers;

use App\Mail\MailSend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send()
    {

        request()->validate(['email' => 'required|email']);

        Mail::to(request('email'))->send(new MailSend());

        return redirect()->back();

    }
}
