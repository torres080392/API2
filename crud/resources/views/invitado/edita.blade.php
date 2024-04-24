@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/styleEditar.css') }}">
@section('contenido')
@extends('layouts.sidebar')

<table class="form-table">
    <form action="{{ route('invitado.update', $invitado->id) }}" method="post">
        @csrf
        @method('PUT')
        <tr>
            <td><label for="nombre">Nombre:</label></td>
            <td><input type="text" id="nombre" name="nombre" value="{{ $invitado->nombre }}" required></td>
        </tr>
        <tr>
            <td><label for="apellido">Apellido:</label></td>
            <td><input type="text" id="apellido" name="apellido" value="{{ $invitado->apellido }}" required></td>
        </tr>
        <tr>
            <td><label for="edad">Edad:</label></td>
            <td><input type="number" id="edad" name="edad" value="{{ $invitado->edad }}" required></td>
        </tr>
        <tr>
            <td><label for="correo">Correo Electrónico:</label></td>
            <td><input type="email" id="correo" name="correo" value="{{ $invitado->correo }}" required></td>
        </tr>
        <tr>
            <td><label for="telefono">Teléfono:</label></td>
            <td><input type="tel" id="telefono" name="telefono" value="{{ $invitado->telefono }}" required></td>
        </tr>
        <tr>
            <td><label for="ciudad">Ciudad:</label></td>
            <td><input type="text" id="ciudad" name="ciudad" value="{{ $invitado->ciudad }}" required></td>
        </tr>
        <tr>
            <td><label for="departamento">Departamento:</label></td>
            <td><input type="text" id="departamento" name="departamento" value="{{ $invitado->departamento }}" required></td>
        </tr>
        <tr>
            <td><label for="direccion">Dirección:</label></td>
            <td><input type="text" id="direccion" name="direccion" value="{{ $invitado->direccion }}" required></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Actualizar</button>
                <a href="{{ route('invitado.index') }}">Atrás</a>
            </td>
        </tr>
    </form>
</table>
@endsection
