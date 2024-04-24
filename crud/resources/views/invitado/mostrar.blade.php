
@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/styleMostrar.css') }}">
@section('contenido')
@extends('layouts.sidebar')

<table class="guest-table">
    <tr>
        <td>Nombre:</td>
        <td>{{ $invitado->nombre }}</td>
    </tr>
    <tr>
        <td>Apellido:</td>
        <td>{{ $invitado->apellido }}</td>
    </tr>
    <tr>
        <td>Edad:</td>
        <td>{{ $invitado->edad }}</td>
    </tr>
    <tr>
        <td>Correo:</td>
        <td>{{ $invitado->correo }}</td>
    </tr>
    <tr>
        <td>Teléfono:</td>
        <td>{{ $invitado->telefono }}</td>
    </tr>
    <tr>
        <td>Ciudad:</td>
        <td>{{ $invitado->ciudad }}</td>
    </tr>
    <tr>
        <td>Departamento:</td>
        <td>{{ $invitado->departamento }}</td>
    </tr>
    <tr>
        <td>Dirección:</td>
        <td>{{ $invitado->direccion }}</td>
    </tr>
</table>
<a href="{{ route('invitado.index') }}">Atrás</a>
@endsection
