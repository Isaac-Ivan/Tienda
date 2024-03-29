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

Route::post('/login', [App\Http\Controllers\UserController::class, 'login']);

Route::post('/register-user', [App\Http\Controllers\UserController::class, 'Register']);

//Servicios para la interaccion con los cuadernos (CRUD)

Route::get('/listar-cuaderno', [App\Http\Controllers\CuadernoController::class, 'Listar']);

Route::post('/register-cuaderno', [App\Http\Controllers\CuadernoController::class, 'Registrar']);

Route::post('/eliminar-cuaderno', [App\Http\Controllers\CuadernoController::class, 'Eliminar']);

Route::post('/editar-cuaderno', [App\Http\Controllers\CuadernoController::class, 'Editar']);

//Servicios para la interaccion con los libros (CRUD)

Route::get('/listar-libro', [App\Http\Controllers\LibrosController::class, 'Listar']);

Route::post('/register-libro', [App\Http\Controllers\LibrosController::class, 'Registrar']);

Route::post('/eliminar-libro', [App\Http\Controllers\LibrosController::class, 'Eliminar']);

Route::post('/editar-libro', [App\Http\Controllers\LibrosController::class, 'Editar']);

//Servicios para interaccion con Proveedores

Route::post('/register-proveedor', [App\Http\Controllers\ProveedoresController::class, 'Insertar']);

Route::post('/editar-proveedor', [App\Http\Controllers\ProveedoresController::class, 'Editar']);

Route::post('/eliminar-proveedor', [App\Http\Controllers\ProveedoresController::class, 'Eliminar']);

Route::get('/listar-proveedor', [App\Http\Controllers\ProveedoresController::class, 'Listar']);

//Servicio para interaccion con Clientes





