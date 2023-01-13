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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\FrontController::class, 'homepage'])->name('front.home');
Route::match(['get','post'],'/openaccount', [App\Http\Controllers\FrontController::class, 'openaccount'])->name('front.openaccount');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
