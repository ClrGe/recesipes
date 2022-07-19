<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Users\Users\Users\Users\Recipes\Ingredient;
use App\Models\Users\Users\Users\Users\Recipes\Quantity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Users\Users\Users\Users\Recipes\Recipe;

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
