<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CategoriaController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/estudiantes', EstudianteController::class);

/* // Proteger las rutas de la API que deseas autenticar
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/estudiantes', [EstudianteController::class, 'index']);
    Route::post('/estudiantes', [EstudianteController::class, 'store']);
    Route::get('/estudiantes/{id}', [EstudianteController::class, 'show']);
    Route::put('/estudiantes/{id}', [EstudianteController::class, 'update']);
    Route::delete('/estudiantes/{id}', [EstudianteController::class, 'destroy']);
}); */

//Rutas del controlador Estudiante
Route::apiResource('estudiantes', \App\Http\Controllers\EstudianteController::class)
                    ->middleware('auth:sanctum');

//Rutas del controlador Categoria
Route::apiResource('/categorias', CategoriaController::class)
                    ->middleware('auth:sanctum');
                    


Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);