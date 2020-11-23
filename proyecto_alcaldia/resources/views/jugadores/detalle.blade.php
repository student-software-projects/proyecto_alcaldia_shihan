@extends('layout')

@section('titulo', 'Detalle Jugador')

@section('contenido')
    <div class "row ">
        <div class="uk-card uk-card-secondary uk-card-body">
            <h3 class="uk-card-title" style="font-family:'Piazzolla'">Jugador: {{$jugador->nombres}}</h3>
            <dl class="">
              <dt>Nombres:</dt>
              <dd>{{$jugador->nombres}}</dd>
              <br>
              <dt>Apellidos:</dt>
              <dd>{{$jugador->apellidos}}</dd>
              <br>
              <dt>Numero de camisa:</dt>
              <dd>{{$jugador->numero_camisa}}</dd>
              <br>
              <dt>Apodo:</dt>
              <dd>{{$jugador->apodo}}</dd>
              <br>
              <dt>Equipo ID:</dt>
              <dd>{{$jugador->equipo_id}}</dd>
              <br>
              <dt>Opciones:</dt>
              <dd>
                <form action="{{route('jugador.eliminar', $jugador->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <a class="uk-button uk-button-link" href="{{route('jugador.editar', $jugador->id)}}" uk-icon="file-edit" uk-tooltip="Editar"></a>
                  <button class="uk-button uk-button-link" type="submit" name="submit" style="margin-left:15px"><span uk-icon="icon: trash" uk-tooltip="Eliminar"></span></button>
                </form>
              </dd>
              <br>
            </dl>
            <a class="uk-button uk-button-default uk-margin-left" href="{{route('jugador.index')}}">Cancelar</a>
        </div>
    </div>
@endsection
