@extends('layout')

@section('titulo', 'Editar Localidad')

@section('contenido')
    <div class "row ">
        <div class="uk-card uk-card-secondary uk-card-body">
            <h3 class="uk-card-title" style="font-family:'Piazzolla'">Editar localidad:</h3>
            <form action="{{route('localidad.actualizar', $localidad->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="localidad">Nombre de la localidad:</label>
                    <input type="text" name="localidad" id="localidad" class="uk-input" value="{{$localidad->localidad}}">
                </div>
                <hr>
                <button class="uk-button uk-button-primary" type="submit">Actualizar</button>
                <a class="uk-button uk-button-default uk-margin-left" href="{{route('localidad.index')}}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
