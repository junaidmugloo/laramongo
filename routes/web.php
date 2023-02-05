<?php

use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/register', [App\Http\Controllers\Users::class, 'store']);
Route::get('/show', [App\Http\Controllers\Users::class, 'index']);
Route::get('/delete/{id}', [App\Http\Controllers\Users::class, 'destroy']);
Route::post('/update/{id}', [App\Http\Controllers\Users::class, 'update']);
Route::get('/edit/{id}', [App\Http\Controllers\Users::class, 'edit']);
Route::get('/send', [App\Http\Controllers\Users::class, 'send_otp']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
