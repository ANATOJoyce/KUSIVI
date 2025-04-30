<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\GestionAuthentification;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// agriculteur routes
Route::middleware(['auth', 'GestionAuthentification:agriculteur'])->group(function () {
    Route::get('/agriculteur/dashboard', [HomeController::class, 'agriculteurDashboard'])->name('agriculteurDashboard');
});
Route::middleware(['auth', 'GestionAuthentification:admin'])->group(function () {
    Route::get('/admin/dashboard', [HomeController::class, 'adminDashboard'])->name('adminDashboard');
});

Route::middleware(['auth', 'GestionAuthentification:vendeur'])->group(function () {
    Route::get('/vendeur/dashboard', [HomeController::class, 'vendeurDashboard'])->name('vendeurDashboard');
});



