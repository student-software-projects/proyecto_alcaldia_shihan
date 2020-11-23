<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Localidad;

class EquipoController extends Controller
{
    public function index(){
        $equipos = Equipo::all();
        return view('equipos.index', compact('equipos'));
    }

    public function crear(){
        $localidades = Localidad::all();
        return view('equipos.crear', compact('localidades'));
    }

    public function guardar(Request $request){
        $equipo = Equipo::create($request->all());
        return redirect()->route('equipo.index');
    }

    public function detalle($id){
        $equipo = Equipo::find($id);
        return view('equipos.detalle', compact('equipo'));
    }

    public function eliminar($id){
        $equipo = Equipo::find($id)->delete();
        return redirect()->route('equipo.index');
    }

    public function editar($id){
        $localidades = Localidad::all();
        $equipo = Equipo::find($id);
        return view('equipos.editar', compact('equipo', 'localidades'));
    }

    public function actualizar(Request $request, $id){
        $equipo = Equipo::find($id)->update($request->all());
        return redirect()->route('equipo.detalle', $id);
    }
}
