<?php

use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\EvaluationController;
use App\Http\Controllers\API\IngredientController;
use App\Http\Controllers\API\MediaController;
use App\Http\Controllers\API\PermissionController;
use App\Http\Controllers\API\QuantityController;
use App\Http\Controllers\API\RecipeController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\SearchController;
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

Route::middleware(['auth:api'])->group(function () {
#region GET

    #region Recipes

        #region Recipe
        Route::get('recipes/favorites', [RecipeController::class, 'favorites'])->name('api.recipes.favorites');
        Route::get('recipes/myrecipes', [RecipeController::class, 'myRecipes'])->name('api.recipes.myrecipes');
        Route::get('recipes/lastrecipes', [RecipeController::class, 'lastRecipes'])->name('api.recipes.lastrecipes');
        Route::get('recipes/random', [RecipeController::class, 'random'])->name('api.recipes.random');
        Route::get('recipes/{recipe}', [RecipeController::class, 'show'])->name('api.recipes.show');
        Route::get('recipes', [RecipeController::class, 'index'])->name('api.recipes.index');
        Route::get('recipes/search/{substring}', [RecipeController::class, 'search'])->name('api.recipes.search');
    #endregion

    #region Ingredients
        Route::get('ingredients', [IngredientController::class, 'index'])->name('api.ingredients.index');
        Route::get('ingredients/{ingredient}', [IngredientController::class, 'show'])->name('api/ingredients.show');
    #endregion

    #region Category
        Route::get('categories', [CategoryController::class, 'index'])->name("api.categories.index");
        Route::get('categories/{category}', [CategoryController::class, 'show'])->name("api.categories.show");
        Route::get('categories/search/{substring}', [CategoryController::class, 'search'])->name("api.categories.search");
    #endregion

    #region Quantities
        Route::get('quantities', [QuantityController::class, 'index'])->name('api.quantities.index');
        Route::get('quantities/{quantity}', [QuantityController::class, 'show'])->name('api.quantities.show');
    #endregion

    #region Evaluations
        Route::get('evaluations', [EvaluationController::class, 'index'])->name('api.evaluations.index');
        Route::get('evaluations/{evaluation}', [EvaluationController::class, 'show'])->name('api.evaluations.show');
        Route::get('evaluations/recipe/{recipe}', [EvaluationController::class, 'byRecipe'])->name('api.evaluations.byrecipe');
    #endregion

    #region Media
        Route::get('medias', [MediaController::class, 'index'])->name('api.medias.index');
        Route::get('medias/{media}', [MediaController::class, 'show'])->name('api.medias.show');
        Route::get('medias/recipe/{recipe}', [MediaController::class, 'byRecipe'])->name('api.medias.byrecipe');
    #endregion

#endregion

#region Users

    #region User
        Route::get('users', [UserController::class, 'index'])->name('api.users.index');
        Route::get('users/{user}', [UserController::class, 'show'])->name('api.users.show');
    #endregion

    #region Roles
        Route::get('roles', [RoleController::class, 'index'])->name('api.roles.index');
        Route::get('roles/{role}', [RoleController::class, 'show'])->name('api.roles.show');
    #endregion

    #region Permissions
        Route::get('permissions', [PermissionController::class, 'index'])->name('api.permissions.index');
        Route::get('permissions/{permission}', [PermissionController ::class, 'show'])->name('api.permissions.show');
    #endregion

#endregion

Route::get('search/{substring}', [SearchController::class, 'search'])->name('api.search');

#endregion

#region DELETE

#region Recipes
    Route::delete('recipes/{recipe}', [RecipeController::class, 'destroy'])->name('api.recipes.destroy');
    Route::delete('quantities/{quantity}', [QuantityController::class, 'destroy'])->name('api.quantities.destroy');
    Route::delete('evaluations/{evaluation}', [EvaluationController::class, 'destroy'])->name('api.evaluations.destroy');
    Route::delete('medias/{media}', [MediaController::class, 'destroy'])->name('api.medias.destroy');
    Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name("api.categories.destroy");
    Route::delete('ingredients/{ingredient}', [IngredientController::class, 'destroy'])->name('api/ingredients.destroy');
#endregion

#region Users
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('api.users.destroy');
    Route::delete('roles/{role}', [RoleController::class, 'destroy'])->name('api.roles.destroy');
    Route::delete('permissions/{permission}', [PermissionController::class, 'destroy'])->name('api.permissions.destroy');
#endregion

#endregion

#region PUT

#region Users
    Route::put('users/{user}', [UserController::class, 'update'])->name('api.users.update');
#endregion

#endregion
});


