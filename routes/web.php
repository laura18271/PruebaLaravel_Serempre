<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ClientesController;





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

/*Route::get('/', function () {
    return view('layouts.app');
});*/

Route::get('/', function () {
    return view('login');
});

route::resource('clientes', 'App\Http\Controllers\ClientesController');

route::resource('cities', 'App\Http\Controllers\citiesController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
