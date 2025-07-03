<?php

use App\Http\Controllers\Admin\BABKuhpController;
use App\Http\Controllers\Admin\BukuKuhpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreprocessingController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\DataController;
use App\Http\Controllers\Admin\HistoryQueryController;
use App\Http\Controllers\Admin\PasalKuhpController;

Route::get('/', function () { return view('welcome');})->name('home');
Route::get('/#home', function () { return view('welcome');})->name('home');
Route::get('/#tentang', function () { return view('welcome');})->name('tentang');
Route::get('/#cara-pakai', function () { return view('welcome');})->name('cara-pakai');
Route::get('/#kontak', function () { return view('welcome');})->name('kontak');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'store']);
});

Route::get('/result', [PreprocessingController::class, 'resultPreprocessing'])->name('result');
Route::get('/preprocess-all-pasal', [PreprocessingController::class, 'preprocessAllPasal']);
Route::post('/process-query', [PreprocessingController::class, 'preprocessQuery'])->name('process.query');

Route::get('/pasal', [SearchController::class, 'index'])->name('pasal.index');
Route::get('/pasal/{id}', [SearchController::class, 'show'])->name('pasal.show');
Route::match(['get', 'post'], '/search', [SearchController::class, 'search'])->name('pasal.process');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [AdminDashboardController::class, 'profile'])->name('dashboard.profile');
    Route::get('/profile/edit', [AdminDashboardController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [AdminDashboardController::class, 'update'])->name('profile.update');
    Route::post('/admin/password/update', [AdminDashboardController::class, 'updatePassword'])->name('dashboard.password.update');
    Route::get('/data', [DataController::class, 'index'])->name('dashboard.data');
    Route::resource('buku-kuhp', BukuKuhpController::class);
    Route::resource('bab-kuhp', BABKuhpController::class);
    Route::resource('pasal-kuhp', PasalKuhpController::class);
    Route::resource('history', HistoryQueryController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});