<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LibrosController;
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


Route::get('/', function () {
    return view('login/login');
})->name('login');

Route::get('/registrar', function () {
    return view('registro/registro');
})->name('registro');

Route::get('/index', [HomeController::class, 'inicio'])->middleware('auth')->name('inicio');


Route::get('/libros', function () {
    return view('web/libros/index');
})->middleware('auth')->name('libros-index');

Route::get('/cuadernos', function () {
    return view('web/cuadernos/index');
})->middleware('auth')->name('cuadernos-index');

Route::get('/proveedores', function () {
    return view('web/proveedores/index');
})->middleware('auth')->name('proveedores-index');





Route::post('/validad-registro', [UserController::class, 'Register'])->name('validar-registro');
Route::post('/inicia-sesion', [UserController::class, 'Login'])->name('iniciar-sesion');
Route::get('/logout', [UserController::class, 'Logout'])->name('logout');

Route::post('/edit-libro', [LibrosController::class, 'Editar'])->name('edit-libro');
Route::post('/delete-libro', [LibrosController::class, 'Eliminar'])->name('delete-libro');
Route::post('/create-libro', [LibrosController::class, 'Registrar'])->name('create-libro');



// Route::get('/correo', function () {
//     $email =  new SendWelcome;
//     Mail::to('oscarisaac1504@gmail.com')->send($email);
//     return "hola";
// });
