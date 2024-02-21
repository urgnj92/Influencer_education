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
Route::get('/notice', [App\Http\Controllers\UsersController::class, 'show'])->name('notice');
// パスワード変更
Route::get('/password', [App\Http\Controllers\UsersController::class, 'update'])->name('password');


// お知らせ一覧
Route::get('/notice_admin', [App\Http\Controllers\AdminsController::class, 'show'])->name('notice_admin');
// お知らせ編集/変更
Route::get('/notice_admin_edit/{id}', [App\Http\Controllers\AdminsController::class, 'edit'])->name('notice_admin_edit');
Route::post('/notice_admin_edit/{id}',[App\Http\Controllers\AdminsController::class, 'update'])->name('notice_admin_update');

// お知らせ登録
Route::get('/create_notice',[App\Http\Controllers\AdminsController::class, 'create'])->name('create_notice');
Route::post('/notice_admin_new', [App\Http\Controllers\AdminsController::class, 'store'])->name('notice_admin_new');
