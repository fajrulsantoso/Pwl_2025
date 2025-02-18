<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\WelcomeController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', [WelcomeController::class, 'hello']);
// Route::get('/index', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// // Route untuk Home
// Route::get('/', HomeController::class);

// // Route untuk About
// Route::get('/about', AboutController::class);

// // Route untuk Artikel dengan ID
// Route::get('/articles/{id}', ArticleController::class);

// Route::resource('photos', PhotoController::class);

// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'fajrul']);
//     });

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'fajrul']);
//     });
    
    Route::get('/greeting', [WelcomeController::class,
'greeting']);

