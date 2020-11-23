<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Jugador;

class JugadorController extends Controller
{
    public function index(){
        $jugadores = Jugador::all();
        return view('jugadores.index', compact('jugadores'));
    }

    public function crear(){
        $equipos = Equipo::all();
        return view('jugadores.crear', compact('equipos'));
    }

    public function guardar(Request $request){
        $jugador = Jugador::create($request->all());
        return redirect()->route('jugador.index');
    }

    public function detalle($id){
        $jugador = Jugador::find($id);
        return view('jugadores.detalle', compact('jugador'));
    }

    public function eliminar($id){
        $jugador = Jugador::find($id)->delete();
        return redirect()->route('jugador.index');
    }

    public function editar($id){
        $equipos = Equipo::all();
        $jugador = Jugador::find($id);
        return view('jugadores.editar', compact('jugador', 'equipos'));
    }

    public function actualizar(Request $request, $id){
        $jugador = Jugador::find($id)->update($request->all());
        return redirect()->route('jugador.detalle', $id);
    }
}
