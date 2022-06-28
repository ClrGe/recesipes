<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;

use App\Models\Recipes\Recipe;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\HandlesAuthorization;

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
        $recipes = Recipe::all();
        return view('recipes', ['recipes' => $recipes]);
    }

    public function view(Request $request, $id)
    {
        $recipe = Recipe::where('id', $id)->first();
        return view('recipe', ['recipe' => $recipe]);
    }

    public function random()
    {
        $recipe = Recipe::inRandomOrder()->first();
        return view('recipe', ['recipe' => $recipe]);
    }

    public function manyrandom()
    {
        $recipes = Recipe::all();
        return view('welcome', ['recipes' => $recipes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recipeID = (Recipe::all()->last()->id)+1;
        DB::insert("INSERT INTO recipes (`id`) VALUES ($recipeID)");
        return view('Recipes/recipeCreation');
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
        $recipes = Recipe::all();
        return view('recipe', ['recipe' => $recipe]);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
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
        $recipe->delete();

        return redirect()->route('recipes.index')->with('status', 'Recette supprimée');
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

    public function search($subString)
    {
        $recipes = Recipe::query()->where('name', 'LIKE', "%{$subString}%")->get();
        return Response::json($recipes);
    }
}
