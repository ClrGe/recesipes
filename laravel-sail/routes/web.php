<?php

use App\Http\Controllers\Authentification\LoginController;
use App\Http\Controllers\Authentification\RegisterController;
use App\Http\Controllers\Recipes\CategoryController;
use App\Http\Controllers\Recipes\EvaluationController;
use App\Http\Controllers\Recipes\IngredientController;
use App\Http\Controllers\Recipes\MediaController;
use App\Http\Controllers\Recipes\QuantityController;
use App\Http\Controllers\Recipes\RecipeController;
use App\Http\Controllers\Recipes\RecipeDetailsController;
use App\Http\Controllers\ShoppingListController;
use App\Http\Controllers\Users\LikeController;
use App\Http\Controllers\Users\PermissionController;
use App\Http\Controllers\Users\RoleController;
use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name("home");


Route::get('/contact', function(){
    return view('contact');
})->name('contact.form');


// routes for Auth
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::middleware(['auth'])->group(function(){
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');


// routes for recipe
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::resource('evaluation', EvaluationController::class);
Route::resource('ingredient', IngredientController::class);
Route::resource('media', MediaController::class);
Route::resource('quantity', QuantityController::class);
Route::resource('recipes', RecipeController::class);
Route::get('/randomrecipe', [RecipeController::class, 'randomRecipe'])->name('randomrecipe');


// waiting log management
//Route::get('/recipes/create', [RecipeController::class, 'create'])->name('recipes.create')->middleware('can:create,recipes');
//Route::put('/recipes/{recipe}', [RecipeController::class, 'update'])->name('recipes.update')->middleware('can:create,recipes');

// routes for users
Route::resource('like', LikeController::class);
Route::resource('permission', PermissionController::class);
Route::resource('role', RoleController::class);
Route::resource('user', UserController::class);

// routes for shopping list
Route::resource('shoppinglist', ShoppingListController::class);

