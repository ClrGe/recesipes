<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Recipes\Ingredient;
use App\Models\Recipes\Quantity;
use App\Models\Recipes\Recipe;
use Illuminate\Support\Facades\Response;


class SearchController extends Controller
{
    public function search($subString)
    {
        $ingredients = Ingredient::query()->where('name', 'LIKE', "%{$subString}%")->get();
        $recipesByIngredients = [];
        foreach($ingredients as $ingredient)
        {
            $quantities = Quantity::all()->where('ingredient_id', '=', $ingredient->id);
            foreach($quantities as $quantity)
            {
                $recipe = Recipe::all()->where('id', '=', $quantity->recipe_id);
                $recipesByIngredients[] = $recipe;
            }
        }
        $recipesByName = Recipe::query()->where('name', 'LIKE', "%{$subString}%")->get();
        $recipes = $recipesByName->concat($recipesByIngredients);
        return Response::json($recipes);
    }
}
