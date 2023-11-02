<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Usuarios
Route::resource('usuarios', 'UsuarioController');

// Roles
Route::resource('roles', 'RolController');

// Enlaces
Route::resource('enlaces', 'EnlaceController');

// Bitacoras
Route::resource('bitacoras', 'BitacoraController')->only(['index']);
