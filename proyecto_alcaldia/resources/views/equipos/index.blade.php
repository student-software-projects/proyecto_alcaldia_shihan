@extends('layout')

@section('titulo', 'Equipos')

@section('contenido')
  <div class "row ">
    <div class="uk-card uk-card-secondary uk-card-body">
      <h3 class="uk-card-title" style="font-family:'Piazzolla'">Equipos</h3>
      <a href="{{ route('equipo.crear') }}" class="uk-button uk-button-secondary" style="float:right">Crear nuevo equipo</a>
      <table class="uk-table uk-table-divider">
          <thead>
              <tr>
                  <th class="uk-table-expand">Nombre del equipo</th>
                  <th class="uk-table-expand">Logo</th>
                  <th class="uk-table-expand">Localidad ID</th>
                  <th class="uk-width-small">Opciones</th>
              </tr>
          </thead>
          <tbody>
              @foreach($equipos as $equipo)
                  <tr>
                      <td><a class="uk-button uk-button-text" href="{{route('equipo.detalle', $equipo->id)}}">{{$equipo->nombre_equipo}}</a></td>
                      <td>{{$equipo->logo}}</td>
                      <td>{{$equipo->localidad_id}}</td>
                      <td>
                        <form action="{{route('equipo.eliminar', $equipo->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <a class="uk-button uk-button-link" href="{{route('equipo.editar', $equipo->id)}}" uk-icon="file-edit" uk-tooltip="Editar"></a>
                          <button class="uk-button uk-button-link" type="submit" name="submit" style="margin-left:15px"><span uk-icon="icon: trash" uk-tooltip="Eliminar"></span></button>
                        </form>
                      </td>

                  </tr>
              @endforeach
          </tbody>
      </table>
    </div>
  </div>
@endsection
