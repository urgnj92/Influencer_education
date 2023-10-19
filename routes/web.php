<?php

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
    return view('welcome');
});

// Auth::routes();
// login/register機能の一時除外のため上記を下記に書き換え
Auth::routes(['register' => false, 'login' => false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 授業進捗
Route::get('/progress', [App\Http\Controllers\UsersController::class, 'index'])->name('curriculum_progress');
// お知らせ一覧
Route::get('/notice/{id}', [App\Http\Controllers\UsersController::class, 'show'])->name('notice');
// パスワード変更
Route::get('/password', [App\Http\Controllers\UsersController::class, 'update'])->name('password');

// お知らせ一覧
Route::get('/notice_admin', [App\Http\Controllers\AdminsController::class, 'show'])->name('notice_admin');
// お知らせ変更
Route::get('/change_notice', [App\Http\Controllers\AdminsController::class, 'update'])->name('notice_admin_update');
