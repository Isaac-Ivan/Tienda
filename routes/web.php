<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CuadernoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\ProveedoresController;
use Illuminate\Support\Facades\Route;
use App\Mail\SendWelcome;
use Illuminate\Support\Facades\Mail;
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


Route::get('/', [HomeController::class, 'inicio'])->middleware('auth')->name('inicio');

Route::get('/login', function () {
    return view('login/login');
})->name('login');

Route::get('/registrar', function () {
    return view('registro/registro');
})->name('registro');



Route::get('/libros', function () {
    return view('web/libros/index');
})->middleware('auth')->name('libros-index');

Route::get('/cuadernos', function () {
    return view('web/cuadernos/index');
})->middleware('auth')->name('cuadernos-index');

Route::get('/proveedores', function () {
    return view('web/proveedores/index');
})->middleware('auth')->name('proveedores-index');


Route::get('/clientes', function () {
    return view('web/clientes/index');
})->middleware('auth')->name('clientes-index');





Route::post('/validad-registro', [UserController::class, 'Register'])->name('validar-registro');
Route::post('/inicia-sesion', [UserController::class, 'Login'])->name('iniciar-sesion');
Route::get('/logout', [UserController::class, 'Logout'])->name('logout');

Route::post('/edit-libro', [LibrosController::class, 'Editar'])->name('edit-libro');
Route::post('/delete-libro', [LibrosController::class, 'Eliminar'])->name('delete-libro');
Route::post('/create-libro', [LibrosController::class, 'Registrar'])->name('create-libro');

Route::post('/edit-cuaderno', [CuadernoController::class, 'Editar'])->name('edit-cuaderno');
Route::post('/delete-cuaderno', [CuadernoController::class, 'Eliminar'])->name('delete-cuaderno');
Route::post('/create-cuaderno', [CuadernoController::class, 'Registrar'])->name('create-cuaderno');


Route::post('/edit-proveedor', [ProveedoresController::class, 'Editar'])->name('edit-proveedor');
Route::post('/create-proveedor', [ProveedoresController::class, 'Registrar'])->name('create-proveedor');
Route::post('/delete-proveedor', [ProveedoresController::class, 'Eliminar'])->name('delete-proveedor');

Route::post('/edit-cliente', [ClientesController::class, 'Editar'])->name('edit-cliente');
Route::post('/create-cliente', [ClientesController::class, 'Registrar'])->name('create-clientes');
Route::post('/delete-cliente', [ClientesController::class, 'Eliminar'])->name('delete-cliente');

// Route::get('/correo', function () {
//     $email =  new SendWelcome;
//     Mail::to('oscarisaac1504@gmail.com')->send($email);
//     return "hola";
// });
