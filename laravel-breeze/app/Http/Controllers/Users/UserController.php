<?php

namespace App\Http\Controllers\Users;

use App\Models\Users\User;
use App\Models\Users\Role;
use App\Models\Recipes\Recipe;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\Controller;
use App\Models\Users\Like;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $role = Role::where("id", $user->role_id)->first();
        $myRecipes = $this->myRecipes();
        $favRecipes = User::find(auth()->user()->id)->likes;
        return view('users.dashboard', ["user" => $user, "role" => $role, "myRecipes" => $myRecipes, "favRecipes" => $favRecipes]);
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
        
    }

    public function destroy(User $user)
    {
        //
    }



    private function myRecipes()
    {
        $myRecipes = Recipe::all()->where("user_id", "=", auth()->user()->id );
        return $myRecipes;
    }
}
