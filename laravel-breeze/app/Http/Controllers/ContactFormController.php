<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class ContactFormController extends Controller
{

    public function index()
    {
        return Response::view('contactform');
    }

    public function sendMail()
    {
        Mail::to('colasmaxime@hotmail.com')
            ->send(new ContactForm());

        return Response::redirectToRoute('contactform')->with('status', 'Email send!');
    }
}
