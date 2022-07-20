<?php

use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\Recipes\ShoppingListController;

use App\Http\Controllers\Recipes\CategoryController;
use App\Http\Controllers\Recipes\EvaluationController;
use App\Http\Controllers\Recipes\IngredientController;
use App\Http\Controllers\Recipes\MediaController;
use App\Http\Controllers\Recipes\QuantityController;
use App\Http\Controllers\Recipes\RecipeController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/

Route::get('/recipe/create', [RecipeController::class, 'create'])->middleware(['auth'])->name('create');

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

    Route::post('/backoffice/savepermission', [BackOfficeController::class, 'savePermission'])->name('backoffice.saveperm');
    Route::post('/backoffice/saverole', [BackOfficeController::class, 'saveRole'])->name('backoffice.saverole');
});

// DashBord

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('users/{user}', [UserController::class, 'show'])->name('users.show')->middleware(['auth']);
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit')->middleware(['auth']);



Route::get('/send-email', [App\Http\Controllers\TestMailController::class, 'sendEmail']);

require __DIR__.'/auth.php';
