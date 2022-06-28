<?php
use App\Http\Controllers\Controller;

use App\Http\Controllers\Recipes\CategoryController;
use App\Http\Controllers\Recipes\EvaluationController;
use App\Http\Controllers\Recipes\IngredientController;
use App\Http\Controllers\Recipes\MediaController;
use App\Http\Controllers\Recipes\QuantityController;
use App\Http\Controllers\Recipes\RecipeController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/create', function () {
    return view('recipeCreation');
})->middleware(['auth'])->name('create');

Route::get('/shopping', function () {
    return view('shopping');
})->middleware(['auth'])->name('shopping');

Route::resource('shoppinglist', ShoppingListController::class);

/*
|--------------------------------------------------------------------------
| Unauthenticated Routes
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', [RecipeController::Class, 'manyrandom'])->name('welcome');;

// Contact form
Route::get('/contact', function(){ return view('contact');})->name('contact.form');

// Recipes
Route::resource('recipes', RecipeController::class);
Route::resource('evaluation', EvaluationController::class);
Route::resource('ingredient', IngredientController::class);
Route::resource('media', MediaController::class);
Route::resource('quantity', QuantityController::class);

Route::get('/recipes', [RecipeController::Class, 'index'])->name('recipes');
Route::get('/recipes/{name}', [RecipeController::Class, 'view'])->name('recipes/{name}');
Route::get('/random', [RecipeController::Class, 'random'])->name('random');

// Categories
Route::resource('categories', CategoryController::class);
Route::get('/categories', [CategoryController::Class, 'index'])->name('categories');
Route::get('/categories/{name}', [CategoryController::Class, 'view']);

require __DIR__.'/auth.php';