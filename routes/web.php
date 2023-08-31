<?php

use Illuminate\Support\Facades\Route;

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

//route index Home quizz

Route::get('/quizz',[QuizzController::class,'index']);

//route index Results quizz
Route::get('/quiz/results',[ResultsController::class,'index']); 
