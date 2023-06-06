<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'PageController@index');
// Route::get('/about', 'PageController@about');
// Route::get('/article/{id}', 'PageController@article');

Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[AboutController::class, 'about']);
Route::get('/article/{id}',[ArticleController::class, 'article']);