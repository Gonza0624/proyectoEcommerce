<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\portadaController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\categoriasController;
use App\Http\Controllers\productosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// layout
Route::get('/main', mainController::class);

// Portada
Route::get('/home', portadaController::class);

// Usuarios
Route::get('/users', [usersController::class, 'index']);
Route::get('/users/crear', [usersController::class, 'crear']) ->name('users.crear');
Route::post('/users/guardar', [usersController::class, 'guardar']) ->name('users.guardar');

// Consulta Productos
Route::get('/consultaProducto', productosController::class);

// Categorias
Route::get('/categorias/celulares', [categoriasController::class, 'celulares']);
Route::get('/categorias/consolas', [categoriasController::class, 'consolas']);
Route::get('/categorias/computadores', [categoriasController::class, 'computadores']);
Route::get('/categorias/camaras', [categoriasController::class, 'camaras']);
Route::get('/categorias/drones', [categoriasController::class, 'drones']);