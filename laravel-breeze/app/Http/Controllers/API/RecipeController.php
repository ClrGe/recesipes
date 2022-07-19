<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Users\Users\Users\Users\Recipes\Recipe;
use App\Models\Users\Users\Users\Users\Users\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Recipe::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users\Users\Users\Users\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return Response::json($recipe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users\Users\Users\Users\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users\Users\Users\Users\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }

    public function favorites()
    {
        $favRecipes = User::find(auth()->user()->id)->likes; // auth()->user()->id
        return Response::json($favRecipes);
    }

    public function myRecipes()
    {
        $myRecipes = Recipe::all()->where("user_id", "=", auth()->user()->id ); // auth()->user()->id
        return Response::json($myRecipes);
    }

    public function lastRecipes()
    {
        $recipes = DB::table("recipes")->orderByDesc("publish_time")->get();
        $lastRecipes = [];
        for($i = 0; $i<9; $i++)
        {
            $lastRecipes[] = $recipes[$i];
        }

        return Response::json($lastRecipes);
    }

    public function random()
    {
        $recipes = Recipe::all();
        $recipe = $recipes[rand(0, count($recipes)-1)];

        return Response::json($recipe);
    }

    public function search($subString)
    {
        $recipes = Recipe::query()->where('name', 'LIKE', "%{$subString}%")->get();
        return Response::json($recipes);
    }
}
