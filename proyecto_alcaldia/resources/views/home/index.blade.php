@extends('layout')

@section('titulo', 'Inicio')

@section('contenido')
    <div class "row">
        <div class="uk-card uk-card-secondary uk-card-body">
            <h3 class="uk-card-title">Bienvenido</h3>
            <img class="uk-align-center" data-src="{{asset('contenido/imagenes/presentacion.jpg')}}" width="800px"  uk-img>
        </div>
    </div>
@endsection
