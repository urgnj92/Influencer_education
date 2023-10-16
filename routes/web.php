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


Auth::routes();

Route::get('/', [App\Http\Controllers\TopController::class, 'showArticles'])->name('top')->middleware('auth');
Route::get('/top', [App\Http\Controllers\TopController::class, 'showArticles'])->name('top')->middleware('auth');
Route::get('/curriculums', [App\Http\Controllers\CurriculumController::class, 'showCurriculums'])->name('curriculums')->middleware('auth');

Route::post('/flgChenge', [App\Http\Controllers\CurriculumController::class, 'flgChenge'])->name('flgChenge')->middleware('auth');

/*Route::get('/', function () {
    if(auth()->check()){
        return view('top');
    }else{
        return view('/auth/login');
    }
    
});*/

/*Route::get('/top', function () {
    if(auth()->check()){
        return view('top');        
    }else{
        return view('/auth/login');
    }
});*/


//Route::get('/top', [App\Http\Controllers\TopController::class, 'showArticles']);

/*Route::get('/delivery', function () {
        return view('delivery');
});*/


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Route::get('/top', function () {
    return view('top');
});*/

