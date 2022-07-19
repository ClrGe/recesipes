<?php

namespace App\Http\Controllers\Recipes;

use App\Http\Controllers\Controller;
use App\Models\Recipes\Ingredient;
use App\Models\Recipes\Quantity;
use App\Models\Recipes\Recipe;
use App\Models\Users\User;
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
        if($recipe->user_id == null)
        {
            $user = null;
        }
        else
        {
            $user = User::where('id', $recipe->user_id)->first();
        }
        $quantities = Quantity::all()->where('recipe_id', $id);
        $ingredients = [];
        foreach($quantities as $quantity){
            $ingredient = Ingredient::where('id', $quantity->ingredient_id)->first();
            $ingredients[] = $ingredient;
        }
        return view('recipe', ['recipe' => $recipe, 'ingredients' => $ingredients, 'quantities' => $quantities, 'user' => $user]);
    }

    public function random()
    {
        $recipe = Recipe::inRandomOrder()->first();
        if($recipe->user_id == null)
        {
            $user = null;
        }
        else
        {
            $user = User::where('id', $recipe->user_id)->first();
        }
        $quantities = Quantity::all()->where('recipe_id', $recipe->id);
        $ingredients = [];
        foreach($quantities as $quantity){
            $ingredient = Ingredient::where('id', $quantity->ingredient_id)->first();
            $ingredients[] = $ingredient;
        }
        return view('recipe', ['recipe' => $recipe, 'ingredients' => $ingredients, 'quantities' => $quantities, 'user' => $user]); 
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
        if($recipe->user_id == null)
        {
            $user = null;
        }
        else
        {
            $user = User::where('id', $recipe->user_id)->first();
        }
        $quantities = Quantity::all()->where('recipe_id', $recipe->id);
        $ingredients = [];
        foreach($quantities as $quantity){
            $ingredient = Ingredient::where('id', $quantity->ingredient_id)->first();
            $ingredients[] = $ingredient;
        }
        return view('recipe', ['recipe' => $recipe, 'ingredients' => $ingredients, 'quantities' => $quantities, 'user' => $user]); 
    }

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

}
