<?php

namespace App\Http\Controllers;

use App\Models\Users\Permission;
use App\Models\Users\Role;
use App\Models\Users\User;
use App\Models\Recipes\Recipe;
use App\Models\Recipes\Category;
use App\Models\Recipes\Quantity;
use Illuminate\Http\Request;

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

    public function savePermission(Request $request)
    {
        $perms = $request->all();
        unset($perms["_token"]);
        $permsKeys = array_keys($perms);
        $perm = array_shift($permsKeys);
        if($perm != "permID")
        {
            $permID = explode("permission", $perm)[1];
            $permission = Permission::where("id", $permID)->first();
    
            $perms = array_shift($perms);
            $review = in_array("review", $perms);
            $selfEdit = in_array("selfEdit", $perms);
            $all = in_array("all", $perms);
        }
        else
        {
            $permission = Permission::where("id", $perms["permID"])->first();
            
            $review = false;
            $selfEdit = false;
            $all = false;
        }
        
        $permission->update(["review" => $review, "self_editing" => $selfEdit, "all" => $all]);
        return redirect()->route('backoffice.roles');

    }

    public function saveRole(Request $request)
    {
        $role = $request->all();
        $roleID = $role["role"];
        $userID = $role["userID"];

        $user = User::where("id", $userID)->first();
        $user->update(["role_id" => $roleID]);
        return redirect()->route('backoffice.users');

    }

    public function recipes()
    {
        $recipes = Recipe::all();
        $categories = Category::all();
        $quantities = Quantity::all();
        return view('backoffice.recipes', ["recipes" => $recipes, "categories" => $categories, "quantities"=> $quantities]);
    }
}
