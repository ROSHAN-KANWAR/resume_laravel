<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contactpage;
use App\Http\Controllers\Homepage;
use App\Http\Controllers\Servicepage;
use App\Http\Controllers\Skillpage;
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

Route::get('/',[Homepage::class ,'homepage'])->name('home');
Route::get('/skillpage',[Skillpage::class ,'skillpage'])->name('skill');
Route::get('/servicepage',[Servicepage::class ,'servicepage'])->name('service');
Route::get('/contactpage',[Contactpage::class ,'contactpage'])->name('contact');
