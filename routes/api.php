<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//CRUD API REST USER 
Route::get('/user', [UserController::class, 'index']); // muestra todos los usuarios
Route::post('/user', [UserController::class, 'store']); // crea un usuario
Route::get('/user/{id}', [UserController::class, 'show']); // muestra un usuario
Route::put('/user/{id}', [UserController::class, 'update']); // actualiza un usuario
Route::delete('/user/{id}', [UserController::class, 'destroy']); // elimina un usuario
