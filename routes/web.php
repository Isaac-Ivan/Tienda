<?php

use App\Http\Controllers\UserController;
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

Route::get('/index', function () {
    return view('web/index');
})->middleware('auth')->name('inicio');

Route::get('/libros', function () {
    return view('web/libros/index');
})->middleware('auth')->name('libros-index');





Route::post('/validad-registro', [UserController::class, 'Register'])->name('validar-registro');
Route::post('/inicia-sesion', [UserController::class, 'Login'])->name('iniciar-sesion');
Route::get('/logout', [UserController::class, 'Logout'])->name('logout');



// Route::get('/correo', function () {
//     $email =  new SendWelcome;
//     Mail::to('oscarisaac1504@gmail.com')->send($email);
//     return "hola";
// });
