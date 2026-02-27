<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\CursoController;

Route::resource('estudiantes', EstudiantesController::class);
Route::resource('cursos', CursoController::class);