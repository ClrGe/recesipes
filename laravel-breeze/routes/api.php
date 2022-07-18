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

#region GET

    #region Recipes

        #region Recipe
            Route::get('recipes/favorites', [RecipeController::class, 'favorites'])->middleware('auth:api')->name('api.recipes.favorites');
            Route::get('recipes/myrecipes', [RecipeController::class, 'myRecipes'])->middleware('auth:api')->name('api.recipes.myrecipes');
            Route::get('recipes/lastrecipes', [RecipeController::class, 'lastRecipes'])->middleware('auth:api')->name('api.recipes.lastrecipes');
            Route::get('recipes/random', [RecipeController::class, 'random'])->middleware('auth:api')->name('api.recipes.random');
            Route::get('recipes/{recipe}', [RecipeController::class, 'show'])->middleware('auth:api')->name('api.recipes.show');
            Route::get('recipes', [RecipeController::class, 'index'])->middleware('auth:api')->name('api.recipes.index');
            Route::get('recipes/search/{substring}', [RecipeController::class, 'search'])->middleware('auth:api')->name('api.recipes.search');
        #endregion

        #region Ingredients
            Route::get('ingredients', [IngredientController::class, 'index'])->middleware('auth:api')->name('api.ingredients.index');
            Route::get('ingredients/{ingredient}', [IngredientController::class, 'show'])->middleware('auth:api')->name('api/ingredients.show');
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

        #region Media
            Route::get('medias', [MediaController::class, 'index'])->middleware('auth:api')->name('api.medias.index');
            Route::get('medias/{media}', [MediaController::class, 'show'])->middleware('auth:api')->name('api.medias.show');
            Route::get('medias/recipe/{recipe}', [MediaController::class, 'byRecipe'])->middleware('auth:api')->name('api.medias.byrecipe');
        #endregion

    #endregion

    #region Users

        #region User
            Route::get('users', [UserController::class, 'index'])->middleware('auth:api')->name('api.users.index');
            Route::get('users/{user}', [UserController::class, 'show'])->middleware('auth:api')->name('api.users.show');
        #endregion

        #region Roles
            Route::get('roles', [RoleController::class, 'index'])->middleware('auth:api')->name('api.roles.index');
            Route::get('roles/{role}', [RoleController::class, 'show'])->middleware('auth:api')->name('api.roles.show');
        #endregion

        #region Permissions
            Route::get('permissions', [PermissionController::class, 'index'])->middleware('auth:api')->name('api.permissions.index');
            Route::get('permissions/{permission}', [PermissionController ::class, 'show'])->middleware('auth:api')->name('api.permissions.show');
        #endregion

    #endregion

    Route::get('search/{substring}', [SearchController::class, 'search'])->name('api.search');

#endregion

#region DELETE

    #region Recipes
        Route::delete('recipes/{recipe}', [RecipeController::class, 'destroy'])->middleware('auth:api')->name('api.recipes.destroy');
        Route::delete('quantities/{quantity}', [QuantityController::class, 'destroy'])->middleware('auth:api')->name('api.quantities.destroy');
        Route::delete('evaluations/{evaluation}', [EvaluationController::class, 'destroy'])->middleware('auth:api')->name('api.evaluations.destroy');
        Route::delete('medias/{media}', [MediaController::class, 'destroy'])->middleware('auth:api')->name('api.medias.destroy');
        Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->middleware('auth:api')->name("api.categories.destroy");
        Route::delete('ingredients/{ingredient}', [IngredientController::class, 'destroy'])->middleware('auth:api')->name('api/ingredients.destroy');
    #endregion

    #region Users
        Route::delete('users/{user}', [UserController::class, 'destroy'])->middleware('auth:api')->name('api.users.destroy');
        Route::delete('roles/{role}', [RoleController::class, 'destroy'])->middleware('auth:api')->name('api.roles.destroy');
        Route::delete('permissions/{permission}', [PermissionController::class, 'destroy'])->middleware('auth:api')->name('api.permissions.destroy');
    #endregion

#endregion
