<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestMailController extends Controller
{
    public function sendEmail()
    {

        $receiverEmailAddress = "maxime.dandel@gmail.com";

        Mail::to($receiverEmailAddress)->send(new TestMail());

        if (Mail::failures() != 0) {
            return "Email has been sent successfully.";
        }
        return "Oops! There was some error sending the email.";
    }
}
