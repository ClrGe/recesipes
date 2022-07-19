<?php

namespace App\Http\Controllers;

use App\Models\Users\Role;
use App\Models\Users\User;

class BackOfficeController extends Controller
{
    public function index()
    {
        return view('backoffice.back');
    }

    public function users()
    {
        $users = User::all();
        $roles = Role::all();
        return view('backoffice.users', ["users" => $users, "roles" => $roles]);
    }
}
