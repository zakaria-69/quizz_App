<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizzController;

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

Route::get('/', [QuizzController::class, 'index'])->name('index');
Route::get('/quiz', [QuizzController::class, 'quiz'])->name('quiz');
Route::get('/result', [QuizzController::class, 'result'])->name('result');
Route::get('/scores', [QuizzController::class, 'scores'])->name('scores');
