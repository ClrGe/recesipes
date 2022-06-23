<?php

namespace App\Http\Controllers\Authentification;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LogController extends Controller
{
    public function index()
    {
        return view('Authentification/login');
    }

    public function Login(Request $request)
    {

    }

    public function Logout(Request $request)
    {
//        logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
