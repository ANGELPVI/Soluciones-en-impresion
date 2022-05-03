<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\registro;
use App\Http\Controllers\login;
use GuzzleHttp\Middleware;

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

Route::get('/',[pageController::class, 'inicio']);

Route::get('/',[pageController::class, 'inicio'])->name('inicio');

Route::get('/impresoras',[pageController::class, 'impresoras'])->name('impresoras');

Route::get('/consumibles',[pageController::class,'consumibles'])->name('consumibles');

Route::get('/soporte',[pageController::class,'soporte'])->name('soporte');

Route::get('/login',[pageController::class,'login'])->name('login')->middleware('guest');

Route::post('/login', [login::class,'store'])->name('store');

Route::get('/registro',[pageController::class,'registro'])->name('registro')->middleware('guest');

Route::post('/registro',[registro::class,'store'])->name('store');

Route::get('/destroy',[login::class,'destroy'])->name('destroy');





