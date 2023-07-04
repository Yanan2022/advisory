<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/', HomeController::class);
Route::resource('/contact', ContactController::class);
Route::resource('/about', AboutController::class);
Route::resource('/services', ServiceController::class);
Route::get('/accompagnement-projet', [ServiceController::class, 'accompagnementProjet'])->name('accompagnement-projet');
Route::get('/amelioration-performance', [ServiceController::class, 'ameliorationPerformance'])->name('amelioration-performance');
Route::get('/conseil-financier', [ServiceController::class, 'conseilFinancier'])->name('conseil-financier');
Route::get('/formation-gestion', [ServiceController::class, 'formationGestion'])->name('formation-gestion');