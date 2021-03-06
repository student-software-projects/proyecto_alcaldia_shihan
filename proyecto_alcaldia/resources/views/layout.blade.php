<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('contenido/uikit/uikit.min.css')}}">
    <script src="{{asset('plugins/uikit/uikit.min.js')}}"></script>
    <script src="{{asset('plugins/uikit/uikit-icons.min.js')}}"></script>

    <title>@yield('titulo') | Alcaldia</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Piazzolla:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        body {
            padding-top: 10px;
            padding-bottom: 20px;
            font-family: 'Piazzolla'
        }
    </style>

</head>
<body>
    <header>
        <nav class="uk-navbar-container uk-margin uk-overflow-auto" style="min-width:600px" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" style="font-family:'Piazzolla'" href="{{url('/')}}">Inicio</a>
            </div>
            <div class="uk-navbar-center">
                <ul class="uk-navbar-nav">
                    <li><a href="{{url('localidades')}}" style="font-family:'Piazzolla'"><span class="uk-margin-small-right" uk-icon="icon: location"></span> Localidades</a></li>
                    <li><a href="{{url('equipos')}}" style="font-family:'Piazzolla'"><span class="uk-margin-small-right" uk-icon="icon: nut"></span> Equipos</a></li>
                    <li><a href="{{url('jugadores')}}" style="font-family:'Piazzolla'"><span class="uk-margin-small-right" uk-icon="icon: album"></span> Jugadores</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="uk-container uk-box-shadow-xlarge uk-overflow-auto uk-padding" style="margin-top:50px">
        @yield('contenido')
    </main>

    <footer style="text-align: center; margin-top: 20px">
        <span>2020 - Creado por Shihan</span>
    </footer>
</body>
</html>
