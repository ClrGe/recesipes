<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\EvaluationController;
use App\Http\Controllers\API\QuantityController;
use App\Http\Controllers\API\RecipeController;
use App\Http\Controllers\API\UserController;
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
Route::get('recipes', [RecipeController::class, 'index'])->middleware('auth:api')->name('api.recipes.index');
#endregion

#region Category
Route::get('categories', [CategoryController::class, 'index'])->middleware('auth:api')->name("api.categories.index");
Route::get('categories/{category}', [CategoryController::class, 'show'])->middleware('auth:api')->name("api.categories.show");
Route::get('categories/search/{substring}', [CategoryController::class, 'search'])->middleware('auth:api')->name("api.categories.search");

#endregion

#region Quantities
Route::get('quantities', [QuantityController::class, 'index'])->middleware('auth:api')->name('api.quantities.index');
Route::get('quantities/{quantity}', [QuantityController::class, 'show'])->middleware('auth:api')->name('api.quantities.show');
#endregion

#region Evaluations
Route::get('evaluations', [EvaluationController::class, 'index'])->middleware('auth:api')->name('api.evaluations.index');
Route::get('evaluations/{evaluation}', [EvaluationController::class, 'show'])->middleware('auth:api')->name('api.evaluations.show');
Route::get('evaluations/recipe/{recipe}', [EvaluationController::class, 'byRecipe'])->middleware('auth:api')->name('api.evaluations.byrecipe');
#endregion

#region Users
Route::get('users', [UserController::class, 'index'])->middleware('auth:api')->name('api.users.index');
Route::get('users/{user}', [UserController::class, 'show'])->middleware('auth:api')->name('api.users.show');
#endregion

