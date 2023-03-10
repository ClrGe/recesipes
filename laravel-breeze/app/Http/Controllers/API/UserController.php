<?php

namespace App\Http\Controllers\API;

use App\Models\Users\User;
use Illuminate\Http\Request;
use App\Models\Users\Like;
use App\Models\Recipes\Recipe;
use App\Models\Recipes\Evaluation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(User::all());
    }


    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return Response::json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $firstName = $request->all()["first_name"];
        $lastName = $request->all()["last_name"];
        $email = $request->all()["email"];
        if($request->all()["oldPW"] != null)
        {
            $oldPW = $request->all()["oldPW"];
            if(!Hash::check($oldPW, $user->password))
            {
                return back()->with('status', 'Mot de passe incorrecte !');
            }
            if($request->all()["newPW"] == null || $request->all()["newPWConf"] == null)
            {
                return back()->with('status', 'Veuillez saisir un mot de passe valide !');
            }

            $newPW = $request->all()["newPW"];
            $newPWConf = $request->all()["newPWConf"];

            if($newPW != $newPWConf)
            {
                return back()->with('status', 'Les mots de passe doivent être identiques !');
            }

            $user->update(["first_name" => $firstName, "last_name" => $lastName, "email" => $email, 'password' => Hash::make($newPW)]);
        }
        else
        {
            $user->update(["first_name" => $firstName, "last_name" => $lastName, "email" => $email]);
        }

        return redirect()->route('dashboard', ["user" => Auth::user()])->with('status', 'Profil modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        Schema::disableForeignKeyConstraints();
        $recipes = Recipe::all()->where('user_id', $user->id);
        foreach($recipes as $recipe)
        {
            $recipe->update(["user_id" => null]);
        }
        $likes = Like::all()->where("user_id", "=", $user->id);
        foreach($likes as $like)
        {
            $like->delete();
        }
        $evaluations = Evaluation::all()->where("user_id", "=", $user->id);
        foreach($evaluations as $evaluation)
        {
            $evaluation->update(["user_id" => null]);
        }
        $user->delete();
        Schema::enableForeignKeyConstraints();
        return back();
    }
}
