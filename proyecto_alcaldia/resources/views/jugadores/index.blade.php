@extends('layout')

@section('titulo', 'Jugadores')

@section('contenido')
  <div class "row ">
    <div class="uk-card uk-card-secondary uk-card-body">
      <h3 class="uk-card-title" style="font-family:'Piazzolla'">Jugadores</h3>
      <a href="{{ route('jugador.crear') }}" class="uk-button uk-button-secondary" style="float:right">Crear nuevo jugador</a>
      <table class="uk-table uk-table-divider">
          <thead>
              <tr>
                  <th class="uk-table-expand">Nombres</th>
                  <th class="uk-table-expand">Apellidos</th>
                  <th class="uk-table-expand">Numero Camisa</th>
                  <th class="uk-width-small">Apodo</th>
                  <th class="uk-width-small">Opcion</th>
              </tr>
          </thead>
          <tbody>
              @foreach($jugadores as $jugador)
                  <tr>
                      <td><a class="uk-button uk-button-text" href="{{route('jugador.detalle', $jugador->id)}}">{{$jugador->nombres}}</a></td>
                      <td>{{$jugador->apellidos}}</td>
                      <td>{{$jugador->numero_camisa}}</td>
                      <td>{{$jugador->apodo}}</td>
                      <td>
                        <form action="{{route('jugador.eliminar', $jugador->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <a class="uk-button uk-button-link" href="{{route('jugador.editar', $jugador->id)}}" uk-icon="file-edit" uk-tooltip="Editar"></a>
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
