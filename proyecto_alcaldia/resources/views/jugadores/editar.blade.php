@extends('layout')

@section('titulo', 'Editar Jugador')

@section('contenido')
    <div class "row ">
        <div class="uk-card uk-card-secondary uk-card-body">
            <h3 class="uk-card-title" style="font-family:'Piazzolla'">Editar Jugador:</h3>
            <form action="{{route('jugador.actualizar', $jugador->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="uk-margin">
                    <label for="nombres">Nombres:</label>
                    <input type="text" name="nombres" id="nombres" class="uk-input" value="{{$jugador->nombres}}">
                </div>
                <div class="uk-margin">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" name="apellidos" id="apellidos" class="uk-input" value="{{$jugador->apellidos}}">
                </div>
                <div class="uk-margin">
                    <label for="numero_camisa">Numero Camisa:</label>
                    <input type="text" name="numero_camisa" id="numero_camisa" class="uk-input" value="{{$jugador->numero_camisa}}">
                </div>
                <div class="uk-margin">
                    <label for="apodo">Apodo:</label>
                    <input type="text" name="apodo" id="apodo" class="uk-input" value="{{$jugador->apodo}}">
                </div>
                <div class="uk-margin">
                    <label for="equipo_id">Equipo:</label>
                    <select class="uk-select" name="equipo_id" id="equipo_id" required>
                        <option value="">Seleccione una opcion...</option>
                        @foreach($equipos as $equipo)
                            <option value="{{$equipo->id}}">{{$equipo->nombre_equipo}}</option>
                        @endforeach
                    </select>
                </div>
                <hr>
                <button class="uk-button uk-button-primary" type="submit">Actualizar</button>
                <a class="uk-button uk-button-default uk-margin-left" href="{{route('jugador.index')}}">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
