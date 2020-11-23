@extends('layout')

@section('titulo', 'Editar Equipo')

@section('contenido')
    <div class "row ">
        <div class="uk-card uk-card-secondary uk-card-body">
            <h3 class="uk-card-title" style="font-family:'Piazzolla'">Editar equipo:</h3>
            <form action="{{route('equipo.actualizar', $equipo->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="uk-margin">
                    <label for="nombre_equipo">Nombre del equipo:</label>
                    <input type="text" name="nombre_equipo" id="nombre_equipo" class="uk-input" value="{{$equipo->nombre_equipo}}">
                </div>
                <div class="uk-margin">
                    <label for="logo">Logo:</label>
                    <textarea type="text" class="uk-textarea" rows="5" name="logo" id="logo">{{$equipo->logo}}</textarea>
                </div>
                <div class="uk-margin">
                    <label for="localidad_id">Localidad:</label>
                    <select class="uk-select" name="localidad_id" id="localidad_id" required>
                        <option value="">Seleccione una opcion...</option>
                        @foreach($localidades as $localidad)
                            <option value="{{$localidad->id}}">{{$localidad->localidad}}</option>
                        @endforeach
                    </select>
                </div>
                <hr>
                <button class="uk-button uk-button-primary" type="submit">Actualizar</button>
                <a class="uk-button uk-button-default uk-margin-left" href="{{route('equipo.index')}}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
