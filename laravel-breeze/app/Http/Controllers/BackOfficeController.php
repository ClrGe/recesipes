<?php

namespace App\Http\Controllers;

use App\Models\Users\Permission;
use App\Models\Users\Role;
use App\Models\Users\User;
use App\Models\Recipes\Recipe;
use App\Models\Recipes\Category;
use App\Models\Recipes\Quantity;

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

    public function roles()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('backoffice.roles', ["permissions" => $permissions, "roles" => $roles]);
    }

    public function recipes()
    {
        $recipes = Recipe::all();
        $categories = Category::all();
        $quantities = Quantity::all();
        return view('backoffice.recipes', ["recipes" => $recipes, "categories" => $categories, "quantities"=> $quantities]);
    }
}
