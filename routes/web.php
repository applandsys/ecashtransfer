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
Route::match(['get','post'],'/loginaccount', [App\Http\Controllers\FrontController::class, 'loginaccount'])->name('front.loginaccount');
Route::match(['get','post'],'/about', [App\Http\Controllers\FrontController::class, 'about'])->name('front.about');
Route::match(['get','post'],'/contact', [App\Http\Controllers\FrontController::class, 'contact'])->name('front.contact');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/account', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'account',  'middleware' => 'auth'], function()
{
    //All the routes that belongs to the group goes here
    Route::get('dashboard', [App\Http\Controllers\AccountController::class, 'dashboard'])->name('account.dashboard');
    Route::match(['get','post'],'profile', [App\Http\Controllers\AccountController::class, 'profile'])->name('account.profile');
    Route::match(['get','post'],'transfer', [App\Http\Controllers\AccountController::class, 'transfer'])->name('account.transfer');
    Route::get('transactions', [App\Http\Controllers\AccountController::class, 'transactions'])->name('account.transactions');
    Route::get('kyc', [App\Http\Controllers\AccountController::class, 'kyc'])->name('account.kyc');
});
