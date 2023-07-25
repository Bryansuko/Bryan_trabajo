<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AsignacionController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CarreraController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\EmplecaController;
use App\Http\Controllers\EmpleadoActividadController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('usuarios', UsuarioController::class);
Route::resource('rols', RolController::class);
Route::resource('users', UserController::class);
Route::resource('asignacions', AsignacionController::class);
Route::resource('empleados', EmpleadoController::class);
Route::resource('carreras', CarreraController::class);
Route::resource('periodos', PeriodoController::class);
Route::resource('emplecas', EmplecaController::class);

Route::resource('empleadoactividad', EmpleadoActividadController ::class);