<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Recipes\Recipe;
use App\Models\Users\User;
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
<<<<<<< HEAD
        return Response::json(Recipe::all());
=======
        //
>>>>>>> f085386 (feat: routes api for Recipes GET)
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
     * @param  \App\Models\Recipe  $recipe
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
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }

    public function favorites()
    {
<<<<<<< HEAD
        $favRecipes = User::find(auth()->user()->id)->likes; // auth()->user()->id
=======
        $favRecipes = User::find(5)->likes; // auth()->user()->id
>>>>>>> f085386 (feat: routes api for Recipes GET)
        return Response::json($favRecipes);
    }

    public function myRecipes()
    {
<<<<<<< HEAD
        $myRecipes = Recipe::all()->where("user_id", "=", auth()->user()->id ); // auth()->user()->id
=======
        $myRecipes = User::find(5)->myRecipes; // auth()->user()->id
>>>>>>> f085386 (feat: routes api for Recipes GET)
        return Response::json($myRecipes); 
    }

    public function lastRecipes()
    {
<<<<<<< HEAD
        $recipes = DB::table("recipes")->orderByDesc("publish_time")->get();
        $lastRecipes = [];
        for($i = 0; $i<9; $i++)
        {
            $lastRecipes[] = $recipes[$i];
=======
        $recipePublications = [];
        $lastRecipes = [];
        $recipes = Recipe::all();

        foreach($recipes as $recipe)
        {
            $recipePublication = Recipe::find($recipe->id)->publications;
            $recipePublications[] = $recipePublication;
        }
        $recipePublications = collect($recipePublications)->sortBy("publish_time")->toArray();
        for($i =0; $i<9; $i++)
        {
            if($recipePublications[$i] != null){
                $lastRecipes[] = $recipes->where("id", "=", $recipePublications[$i]["recipe_id"]);
            }
>>>>>>> f085386 (feat: routes api for Recipes GET)
        }

        return Response::json($lastRecipes);
    }

<<<<<<< HEAD
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
=======
    public function suggested()
    {
        $recipes = Recipe::all();
        $recipe = $recipes[rand(0, count($recipes))];

        return Response::json($recipe);
    }
>>>>>>> f085386 (feat: routes api for Recipes GET)
}
