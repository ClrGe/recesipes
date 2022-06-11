<?php

namespace App\Http\Controllers\Recipes;

use App\Models\Recipes\RecipeDetails;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRecipeDetailsRequest;
use App\Http\Requests\UpdateRecipeDetailsRequest;

class RecipeDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRecipeDetailsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecipeDetailsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RecipeDetails  $recipeDetails
     * @return \Illuminate\Http\Response
     */
    public function show(RecipeDetails $recipeDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RecipeDetails  $recipeDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(RecipeDetails $recipeDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecipeDetailsRequest  $request
     * @param  \App\Models\RecipeDetails  $recipeDetails
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecipeDetailsRequest $request, RecipeDetails $recipeDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RecipeDetails  $recipeDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(RecipeDetails $recipeDetails)
    {
        //
    }
}
