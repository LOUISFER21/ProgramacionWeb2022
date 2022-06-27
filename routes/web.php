<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PersonaController;
use \App\Http\Controllers\GeneroController;
use \App\Http\Controllers\PrestamoController;
use \App\Http\Controllers\PeliculaController;
use \App\Http\Controllers\CintaController;
use \App\Http\Controllers\ActoreController;
use \App\Http\Controllers\DirectoreController;
use \App\Http\Controllers\DetalleactoreController;
use \App\Http\Controllers\DetalledirectoreController;


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

Route::resource("personas",PersonaController::class);
Route::resource("generos",GeneroController::class);
Route::resource("prestamos",PrestamoController::class);
Route::resource("peliculas",PeliculaController::class);
Route::resource("cintas",CintaController::class);
Route::resource("actores",ActoreController::class);
Route::resource("directores",DirectoreController::class);
Route::resource("detalleactores",DetalleactoreController::class);
Route::resource("detalledirectores",DetalledirectoreController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

