<?php

namespace App\Http\Controllers;


use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class ContactFormController extends Controller
{

    public function index()
    {
        return Response::view('contactform');
    }

    public function sendMail(Request $request)
    {
        $mailData = [
            'subject'=>$request->sujet,
            'message'=>$request->message,
            'email'=>$request->email,
        ];

        Mail::to('lrecesipes@gmail.com')
            ->send(new ContactFormMail($mailData));

        return Response::redirectToRoute('contact.form')->with('status', 'Email send!');
    }
}
