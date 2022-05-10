<?php

use App\Http\Controllers\PerformanceComercialController;
use Illuminate\Support\Facades\Route;

/*
|-----------------------------------------/---------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

//Route::controller('performancecomercial.index', 'PerformanceComercialController');

Route::get('/performancecomercial', [App\Http\Controllers\PerformanceComercialController::class, 'index'])
    ->name('performancecomercial.index');

Route::post('performancecomercial/reporte', [\App\Http\Controllers\PerformanceComercialController::class, 'reporte'])
->name('performancecomercial.reporte');

Route::resource('users', \App\Http\Controllers\UserController::class);




//Route::post('performancecomercial/relatorico', [\App\Http\Controllers\PerformanceComercial::class, 'performancecomercial'] )->name('performancecomercial.relatorico');

//Route::post('performancecomercial/relatorico', [\App\Http\Controllers\PerformanceComercial::class, 'performancecomercial'] )->name('performancecomercial.relatorico');