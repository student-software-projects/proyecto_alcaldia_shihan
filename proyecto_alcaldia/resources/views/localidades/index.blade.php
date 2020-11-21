@extends('layout')

@section('titulo', 'Localidades')

@section('contenido')
    <div class "row ">
        <div class="uk-card uk-card-secondary uk-card-body">
        <h3 class="uk-card-title" style="font-family:'Piazzolla'">Localidades</h3>
            <ul class="uk-list">
                @foreach($localidades as $localidad)
                    <li><a href="/localidades" style="font-family:'Piazzolla'"><span class="uk-margin-small-right" uk-icon="icon: location"></span>{{$localidad->localidad}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
