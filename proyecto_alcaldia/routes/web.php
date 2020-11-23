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

/*Vista principal*/
Route::view('/', 'home.index');

/*Vista crud localidad*/
Route::get('localidades', [LocalidadController::class, 'index'])->name('localidad.index');
Route::get('localidades/crear',[LocalidadController::class,'crear'])->name('localidad.crear');
Route::post('localidades', [LocalidadController::class, 'guardar'])->name('localidad.guardar');

Route::delete('localidades/{id}', [LocalidadController::class, 'eliminar'])->name('localidad.eliminar');
Route::get('localidades/editar/{id}', [LocalidadController::class, 'editar'])->name('localidad.editar');
Route::put('localidades/{id}', [LocalidadController::class, 'actualizar'])->name('localidad.actualizar');

/*Vista crud equipo*/
Route::get('equipos', [EquipoController::class, 'index'])->name('equipo.index');
Route::get('equipos/crear',[EquipoController::class,'crear'])->name('equipo.crear');
Route::post('equipos', [EquipoController::class, 'guardar'])->name('equipo.guardar');
Route::get('equipos/{id}', [EquipoController::class, 'detalle'])->name('equipo.detalle');

Route::delete('equipos/{id}', [EquipoController::class, 'eliminar'])->name('equipo.eliminar');
Route::get('equipos/editar/{id}', [EquipoController::class, 'editar'])->name('equipo.editar');
Route::put('equipos/{id}', [EquipoController::class, 'actualizar'])->name('equipo.actualizar');

/*Vista crud jugador*/
Route::get('jugadores', [JugadorController::class, 'index'])->name('jugador.index');
Route::get('jugadores/crear',[JugadorController::class,'crear'])->name('jugador.crear');
Route::post('jugadores', [JugadorController::class, 'guardar'])->name('jugador.guardar');
Route::get('jugadores/{id}', [JugadorController::class, 'detalle'])->name('jugador.detalle');

Route::delete('jugadores/{id}', [JugadorController::class, 'eliminar'])->name('jugador.eliminar');
Route::get('jugadores/editar/{id}', [JugadorController::class, 'editar'])->name('jugador.editar');
Route::put('jugadores/{id}', [JugadorController::class, 'actualizar'])->name('jugador.actualizar');
