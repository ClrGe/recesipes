<?php

use App\Http\Controllers\Authentification\LogController;
use App\Http\Controllers\Authentification\RegisterController;
use App\Http\Controllers\Recipes\RecipeController;
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

Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.list');
Route::get('/login', [LogController::class, 'index'])->name('login.form');
Route::get('/register', [RegisterController::class, 'index'])->name('register.form');
