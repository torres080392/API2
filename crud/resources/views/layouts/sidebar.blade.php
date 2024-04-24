<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/invitadoIndex.css') }}">
    <title>Menu</title>
</head>
@include('partials.mensajes')
<div id="container">
    <nav>
        <ul>
            <li><a href="{{route('menu.blade')}}">Inicio</a></li>
            <li><a href="#">Servicios <i class="down"></i></a>
            <!-- Primer Menu Desplegable -->
            <ul>
                <li><a href="#">Diseño Web</a></li>
                <li><a href="#">Marketing</a></li>
                <li><a href="#">Wordpress</a></li>
            </ul>        
            </li>
            <li><a href="#">Invitados<i class="down"></i></a>
             <!-- Primer Menu Desplegable -->
            <ul>
                <li><a href="{{ route('invitado.index') }}">Listado</a></li>
                <li><a href="{{ route('invitado.create') }}">Crear Nuevo</a></li>
                <li><a href="#">Videos</a>
               <!-- Segudo Menu Desplegable -->
                <ul>
                    <li><a href="#">WhiteBoards</a></li>
                    <li><a href="#">Presentaciones</a></li>
                    <li><a href="#">Otros</a>
                         <!-- Tercer Menu Desplegable -->
                        <ul>
                            <li><a href="#">Stuff</a></li>
                            <li><a href="#">Things</a></li>
                            <li><a href="#">Other Stuff</a></li>
                        </ul>
                    </li>
                </ul>
                </li>
            </ul>
            </li>
           
        </ul>
    </nav>
 
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
