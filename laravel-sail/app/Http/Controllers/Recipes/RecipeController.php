<?php

namespace App\Http\Controllers\Recipes;

use App\Models\Recipes\Recipe;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Response;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipesList = Recipe::all();
        return Response::view('recipes.index', compact('recipesList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $recipeID = (Recipe::all()->last()->id)+1;
//        DB::insert("INSERT INTO recipes (`id`) VALUES ($recipeID)");
        return Response::view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreRecipeRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecipeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function show(Recipe $recipe)
    {
        return Response::view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRecipeRequest $request
     * @param Recipe $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecipeRequest $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Recipe $recipe
     * @return RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        $recipe->delete();

        return Response::redirectToRoute('recipes.index')->with('status', 'Recette supprimée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function randomRecipe()
    {
        $recipes = Recipe::all();
        $recipe=$recipes[rand(0, count($recipes)-1)];

        return $this->show($recipe);
    }
}
