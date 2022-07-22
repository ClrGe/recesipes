<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Recipes\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Schema;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json(Ingredient::all());
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipes\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredient)
    {
        return Response::json($ingredient);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipes\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        Schema::disableForeignKeyConstraints();
        $ingredient->delete();
        Schema::enableForeignKeyConstraints();
        return back();
    }
}
