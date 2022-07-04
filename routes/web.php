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

// 楽曲検索(Portfolio Top) 初期表示
Route::get('/pf/search_music', [Ctl\SearchMusicController::class, 'index'])->name('search_music');
// 楽曲検索(Portfolio Top) 検索
Route::post('/pf/search_music', [Ctl\SearchMusicController::class, 'search'])->name('search_music.search');

// ユーザー一覧 初期表示 初期表示
Route::get('/pf/user_list', [Ctl\UserListController::class, 'index'])->name('user_list');

// ユーザー詳細
Route::get('/pf/user_detail/{id}', [Ctl\UserDetailController::class, 'index'])->name('user_detail');
// edit profile
Route::post('/pf/user_detail/{id}/edit_profile', [Ctl\UserDetailController::class, 'edit'])->name('edit_profile');

// ヘッダー簡単ログイン
Route::get('/pf/login', [Ctl\Auth\LoginController::class, 'easyAuthenticate'])->name('auth.login');
Route::get('/pf/logout', [Ctl\Auth\LoginController::class, 'logout'])->name('auth.logout');

// add favorite
Route::post('/pf/fav/{id}', [Ctl\FavoriteController::class, 'regist'])->name('regist_fav');
// del favorite
Route::delete('/pf/fav/{id}', [Ctl\FavoriteController::class, 'delete'])->name('del_fav');
