<?php

use App\Http\Controllers\Authentification\LogController;
use App\Http\Controllers\Authentification\RegisterController;
use App\Http\Controllers\Recipes\CategoryController;
use App\Http\Controllers\Recipes\EvaluationController;
use App\Http\Controllers\Recipes\IngredientController;
use App\Http\Controllers\Recipes\MediaController;
use App\Http\Controllers\Recipes\QuantityController;
use App\Http\Controllers\Recipes\RecipeController;
use App\Http\Controllers\Recipes\RecipeDetailsController;
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
Route::resource('auth', LogController::class);
Route::resource('register', RegisterController::class);

// routes for recipe
Route::resource('category', CategoryController::class);
Route::resource('evaluation', EvaluationController::class);
Route::resource('ingredient', IngredientController::class);
Route::resource('media', MediaController::class);
Route::resource('quantity', QuantityController::class);
Route::resource('recipes', RecipeController::class);
Route::resource('recipedetails', RecipeDetailsController::class);

// routes for users
Route::resource('like', LikeController::class);
Route::resource('permission', PermissionController::class);
Route::resource('role', RoleController::class);
Route::resource('user', UserController::class);



//Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.list');
//Route::get('/login', [LogController::class, 'index'])->name('login.form');
//Route::get('/register', [RegisterController::class, 'index'])->name('register.form');
