<?php

use App\Http\Controllers\BackOfficeController;
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
Route::get('/', [RecipeController::class, 'manyrandom'])->name('welcome');;

// Contact form
Route::get('/contact', function(){ return view('contact');})->name('contact.form');

// Recipes
Route::resource('recipes', RecipeController::class);
Route::resource('evaluation', EvaluationController::class);
Route::resource('ingredient', IngredientController::class);
Route::resource('media', MediaController::class);
Route::resource('quantity', QuantityController::class);

Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes');
Route::get('/recipes/{name}', [RecipeController::class, 'view'])->name('recipes/{name}');
Route::get('/random', [RecipeController::class, 'random'])->name('random');

// Categories
Route::resource('categories', CategoryController::class);
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/categories/{name}', [CategoryController::class, 'view']);

// BackOffice
Route::middleware(['role:Administrator'])->group(function () {
    Route::get('/backoffice', [BackOfficeController::class, 'index'])->name('backoffice.index');
    Route::get('/backoffice/users', [BackOfficeController::class, 'users'])->name('backoffice.users');
    Route::get('/backoffice/roles', [BackOfficeController::class, 'roles'])->name('backoffice.roles');
    Route::get('/backoffice/recipes', [BackOfficeController::class, 'recipes'])->name('backoffice.recipes');
});


require __DIR__.'/auth.php';
