<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rota Cursos
Route::get('/index-curse', [CourseController::class, 'index']);
Route::get('/index-curse', [CourseController::class, 'index']);
