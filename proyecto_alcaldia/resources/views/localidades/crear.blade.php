@extends('layout')

@section('titulo', 'Crear Localidad')

@section('contenido')
    <div class "row ">
        <div class="uk-card uk-card-secondary uk-card-body">
            <h3 class="uk-card-title" style="font-family:'Piazzolla'">Crear nueva localidad:</h3>
            <form action="{{route('localidad.guardar')}}" method="POST">
                @csrf
                <div>
                    <label for="localidad">Nombre de la localidad:</label>
                    <input type="text" name="localidad" id="localidad" class="uk-input">
                </div>
                <hr>
                <button class="uk-button uk-button-primary" type="submit">Guardar</button>
                <a class="uk-button uk-button-default uk-margin-left" href="{{route('localidad.index')}}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
