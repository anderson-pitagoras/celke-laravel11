<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rota Cursos
Route::get('/index-curse', [CourseController::class, 'index'])->name('courses.index');
Route::get('/show-curse', [CourseController::class, 'show'])->name('courses.show');
Route::get('/create-curse', [CourseController::class, 'create'])->name('courses.create');
Route::post('/store-curse', [CourseController::class, 'store'])->name('courses.store');
Route::get('/edit-curse', [CourseController::class, 'edit'])->name('courses.edit');
Route::put('/update-curse', [CourseController::class, 'update'])->name('courses.update');
Route::delete('/destroy-curse', [CourseController::class, 'destroy'])->name('courses.destroy');
