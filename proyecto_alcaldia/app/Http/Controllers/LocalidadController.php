<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localidad;

class LocalidadController extends Controller
{
    public function index(){
        $localidades = Localidad::all();
        return view('localidades.index', compact('localidades'));
    }
    
    public function crear(){
        return view('localidades.crear');
    }

    public function guardar(Request $request){
        $localidad = Localidad::create($request->all());
        return redirect()->route('localidad.index');
    }  
    
    public function eliminar($id){
        $localidad = Localidad::find($id)->delete();
        return redirect()->route('localidad.index');
    }
        
    public function editar($id){
        $localidad = Localidad::find($id);
        return view('localidades.editar', compact('localidad'));
    }
        
    public function actualizar(Request $request, $id){
        $localidad = Localidad::find($id)->update($request->all());
        return redirect()->route('localidad.index');
    }
}
