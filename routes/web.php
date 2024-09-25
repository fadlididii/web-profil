<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\AuthController;

// Route untuk halaman login dan logout
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Lindungi halaman admin dan resource portfolios dengan middleware auth
Route::middleware('auth')->group(function () {
    Route::get('/admin', [PortfolioController::class, 'index'])->name('admin');
    Route::resource('portfolios', PortfolioController::class)->except(['show']);
});

// Route untuk halaman lain yang tidak memerlukan autentikasi

// Route untuk halaman home
Route::get('/', [PortfolioController::class, 'showHome'])->name('home');

// Route untuk halaman portfolio
Route::get('/portfolio', [PortfolioController::class, 'showPortfolio'])->name('portfolio');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/cat', function () {
    return view('cat');
})->name('cat');

Route::get('/f1', function () {
    return view('f1');
})->name('f1');