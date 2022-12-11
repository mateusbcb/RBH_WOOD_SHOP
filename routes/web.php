<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
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
Route::prefix('/')->group(function() {
    Route::get('/', [PortfolioController::class, 'index'])->name('home');
    Route::get('/aboutUs', [HomeController::class, 'aboutUs'])->name('aboutUs');
    Route::get('/workplace', [HomeController::class, 'workplace'])->name('workplace');
    Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
});

Route::prefix('/portfolio')->group(function () {
    Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.index');
    Route::get('/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('/create', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');
    Route::get('/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::patch('/update/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::get('/{id}/delete', [PortfolioController::class, 'delete'])->name('portfolio.delete');
});
