<?php

namespace App\Http\Controllers\Users;

use App\Models\Users\Role;
use App\Models\Users\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    //Create custom request
    public function store(StoreUserRequest $request)
    {
        //
    }

    public function show(User $user)
    {
        $role = Role::where("id", $user->role_id)->first();
        return view('users.show', ["user" => $user, "role" => $role]);
    }

    public function edit(User $user)
    {
        $role = Role::where("id", $user->role_id)->first();
        return view('users.edit', ["user" => $user, "role" => $role]);
    }


    //Create custom request
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
