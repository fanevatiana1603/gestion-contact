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

Route::get('/example', function () {
    return view('login');
});


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::name('flotte.')->middleware('can:manage-users')->group(function(){
	Route::resource('user','App\Http\Controllers\Useur\UseurController');
	Route::resource('forfait','App\Http\Controllers\Forfait\ForfaitController');
	Route::resource('puce','App\Http\Controllers\Puce\PuceController');
	Route::resource('usager','App\Http\Controllers\Usager\UsagerController');
	Route::resource('status','App\Http\Controllers\status\statusController');
});