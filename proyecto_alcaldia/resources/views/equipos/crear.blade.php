@extends('layout')

@section('titulo', 'Crear Equipo')

@section('contenido')
    <div class "row ">
        <div class="uk-card uk-card-secondary uk-card-body">
            <h3 class="uk-card-title" style="font-family:'Piazzolla'">Crear nuevo equipo:</h3>
            <form action="{{route('equipo.guardar')}}" method="POST">
                @csrf
                <div class="uk-margin">
                    <label for="nombre_equipo">Nombre del equipo:</label>
                    <input type="text" name="nombre_equipo" id="nombre_equipo" class="uk-input">
                </div>
                <div class="uk-margin">
                    <label for="logo">Logo:</label>
                    <textarea type="text" class="uk-textarea" rows="5" name="logo" id="logo"></textarea>
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
                <button class="uk-button uk-button-primary" type="submit">Guardar</button>
                <a class="uk-button uk-button-default uk-margin-left" href="{{route('equipo.index')}}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
