<?php

namespace App\Http\Controllers\Authentification;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Authentification/register');
    }

    public function RegisterUser()
    {

    }
}
