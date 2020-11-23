@extends('layout')

@section('titulo', 'Detalle Equipo')

@section('contenido')
    <div class "row ">
        <div class="uk-card uk-card-secondary uk-card-body">
            <h3 class="uk-card-title" style="font-family:'Piazzolla'">Equipo: {{$equipo->nombre_equipo}}</h3>
            <dl class="">
              <dt>Nombre del quipo:</dt>
              <dd>{{$equipo->nombre_equipo}}</dd>
              <br>
              <dt>Logo:</dt>
              <dd>{{$equipo->logo}}</dd>
              <br>
              <dt>Localidad ID:</dt>
              <dd>{{$equipo->localidad_id}}</dd>
              <br>
              <dt>Opciones:</dt>
              <dd>
                <form action="{{route('equipo.eliminar', $equipo->id)}}" method="POST">
                  @csrf
                  @method('DELETE')
                  <a class="uk-button uk-button-link" href="{{route('equipo.editar', $equipo->id)}}" uk-icon="file-edit" uk-tooltip="Editar"></a>
                  <button class="uk-button uk-button-link" type="submit" name="submit" style="margin-left:15px"><span uk-icon="icon: trash" uk-tooltip="Eliminar"></span></button>
                </form>
              </dd>
              <br>
            </dl>
            <a class="uk-button uk-button-default uk-margin-left" href="{{route('equipo.index')}}">Cancelar</a>
        </div>
    </div>
@endsection
