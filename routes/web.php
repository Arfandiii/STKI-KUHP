<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreprocessingController;
use App\Http\Controllers\SearchController;

Route::get('/', function () { return view('welcome');})->name('home');
Route::get('/#home', function () { return view('welcome');})->name('home');
Route::get('/#tentang', function () { return view('welcome');})->name('tentang');
Route::get('/#cara-pakai', function () { return view('welcome');})->name('cara-pakai');
Route::get('/#kontak', function () { return view('welcome');})->name('kontak');


Route::get('/result', [PreprocessingController::class, 'resultPreprocessing'])->name('result');
Route::get('/preprocess-all-pasal', [PreprocessingController::class, 'preprocessAllPasal']);
Route::post('/process-query', [PreprocessingController::class, 'preprocessQuery'])->name('process.query');

Route::get('/pasal', [SearchController::class, 'index'])->name('pasal.index');
Route::get('/pasal/{id}', [SearchController::class, 'show'])->name('pasal.show');
Route::match(['get', 'post'], '/search', [SearchController::class, 'search'])->name('pasal.process');

