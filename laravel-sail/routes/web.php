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

    //Route::get('/login', [LogController::class, 'index'])->name('login');
    //Route::post('/login', [LogController::class, 'login'])->name('login');
    //
    //Route::get('/logout', [LogController::class, 'logout'])->name('logout');
    //
    //Route::get('/register', [RegisterController::class, 'index'])->name('register');
    //Route::post('/register', [RegisterController::class, 'register'])->name('register');


Route::get('/contact', function(){
    return view('contact');
})->name('contact.form');


Route::resource('recipe', RecipeController::class);
Route::resource('login', LogController::class);
Route::resource('register', RegisterController::class);


//Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.list');
//Route::get('/login', [LogController::class, 'index'])->name('login.form');
//Route::get('/register', [RegisterController::class, 'index'])->name('register.form');
