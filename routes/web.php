<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Ctl;

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

// トップページ
Route::get('/', [Ctl\TopController::class, 'index'])->name('top');
// 楽曲検索(Portfolio Top)
Route::get('/pf/search_music', [Ctl\SearchMusicController::class, 'index'])->name('search_music');
// ユーザー一覧
Route::get('/pf/user_list', [Ctl\UserListController::class, 'index'])->name('user_list');
// ユーザー詳細
Route::get('/pf/user_detail', [Ctl\UserDetailController::class, 'index'])->name('user_detail');

// // simple login
// Route::get('/', [TopController::class, 'index']);
// // add favorite
// Route::get('/', [TopController::class, 'index']);
// // del favorite
// Route::get('/', [TopController::class, 'index']);
