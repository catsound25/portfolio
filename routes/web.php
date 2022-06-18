<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopController;

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

Route::get('/', [TopController::class, 'index']);
// // portfolio top
// Route::get('/', [TopController::class, 'index']);
// // search music
// Route::get('/', [TopController::class, 'index']);
// // search user
// Route::get('/', [TopController::class, 'index']);
// // user detail
// Route::get('/', [TopController::class, 'index']);
// // simple login
// Route::get('/', [TopController::class, 'index']);
// // add favorite
// Route::get('/', [TopController::class, 'index']);
// // del favorite
// Route::get('/', [TopController::class, 'index']);
