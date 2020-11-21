<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalidadController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;

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


Route::view('/', 'home.index');

Route::get('localidades', [LocalidadController::class, 'index'])->name('localidad.index');
Route::get('localidades/crear',[LocalidadController::class,'crear'])->name('localidad.crear');
Route::post('localidades', [LocalidadController::class, 'guardar'])->name('localidad.guardar');

Route::delete('localidades/{id}', [LocalidadController::class, 'eliminar'])->name('localidad.eliminar');
Route::get('localidades/editar/{id}', [LocalidadController::class, 'editar'])->name('localidad.editar');
Route::put('localidades/{id}', [LocalidadController::class, 'actualizar'])->name('localidad.actualizar');
