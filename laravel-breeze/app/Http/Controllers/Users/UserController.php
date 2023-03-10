<?php

namespace App\Http\Controllers\Users;

use App\Models\Users\Role;
use App\Models\Users\User;
use App\Models\Recipes\Recipe;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\Controller;
use App\Models\Recipes\Ingredient;
use App\Models\Recipes\Quantity;
use App\Models\ShoppingList;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $role = Role::where("id", $user->role_id)->first();
        $myRecipes = $this->myRecipes();
        $favRecipes = User::find(auth()->user()->id)->likes;
        $shoppingList = ShoppingList::where("user_id", $user->id)->get();
        $recipes = Recipe::all();
        $quantities = Quantity::all();
        $ingredients = Ingredient::all();
        return view('users.dashboard', [
            "user" => $user,
            "role" => $role,
            "myRecipes" => $myRecipes,
            "favRecipes" => $favRecipes,
            "shoppingList" => $shoppingList,
            "recipes" => $recipes,
            "quantities" => $quantities,
            "ingredients" => $ingredients,
        ]);
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

    private function myRecipes()
    {
        $myRecipes = Recipe::all()->where("user_id", "=", auth()->user()->id );
        return $myRecipes;
    }
}
