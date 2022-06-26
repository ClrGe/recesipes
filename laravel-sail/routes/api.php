<?php

use App\Http\Controllers\API\RecipeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#region Recipes
Route::get('recipes/favorites', [RecipeController::class, 'favorites'])->middleware('auth:api')->name('api.recipes.favorites');
Route::get('recipes/myrecipes', [RecipeController::class, 'myRecipes'])->middleware('auth:api')->name('api.recipes.myrecipes');
Route::get('recipes/lastrecipes', [RecipeController::class, 'lastRecipes'])->middleware('auth:api')->name('api.recipes.lastrecipes');
Route::get('recipes/random', [RecipeController::class, 'random'])->middleware('auth:api')->name('api.recipes.random');
Route::get('recipes/{recipe}', [RecipeController::class, 'show'])->middleware('auth:api')->name('api.recipes.show');
#endregion

