<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;


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

//Proteger las rutas de la API que deseas autenticar
Route::apiResource('estudiantes', \App\Http\Controllers\EstudianteController::class)
                    ->middleware('auth:sanctum');

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);