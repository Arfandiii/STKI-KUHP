<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreprocessingController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/result', [PreprocessingController::class, 'resultPreprocessing']);

Route::get('/preprocess-all-pasal', [PreprocessingController::class, 'preprocessAllPasal']);
Route::post('/process-query', [PreprocessingController::class, 'preprocessQuery'])->name('process.query');