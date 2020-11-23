@extends('layout')

@section('titulo', 'Localidades')

@section('contenido')
    <div class "row ">
        <div class="uk-card uk-card-secondary uk-card-body">
        <h3 class="uk-card-title" style="font-family:'Piazzolla'">Localidades</h3>
        <a href="{{ route('localidad.crear') }}" class="uk-button uk-button-secondary" style="float:right">Crear nueva localidad</a>
        <table class="uk-table uk-table-divider">
            <thead>
                <tr>
                    <th class="uk-table-expand">Nombre de localidad</th>
                    <th class="uk-width-small">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($localidades as $localidad)
                    <tr>
                        <td>{{$localidad->localidad}}</td>
                        <td>
                          <form action="{{route('localidad.eliminar', $localidad->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="uk-button uk-button-link" href="{{route('localidad.editar', $localidad->id)}}" uk-icon="file-edit" uk-tooltip="Editar"></a>
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
