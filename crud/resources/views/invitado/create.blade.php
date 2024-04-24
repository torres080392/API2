<link rel="stylesheet" href="{{ asset('css/styleCreate.css') }}">
@extends('layouts.app')
@extends('layouts.sidebar')
@section('contenido')

<form action="{{route('invitado.guarda')}}" method="post">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="apellido">Apellido:</label>
    <input type="text" id="apellido" name="apellido" required><br><br>

    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required><br><br>

    <label for="correo">Correo Electrónico:</label>
    <input type="email" id="correo" name="correo" required><br><br>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" required><br><br>

    <label for="ciudad">Ciudad:</label>
    <input type="text" id="ciudad" name="ciudad" required><br><br>

    <label for="departamento">Departamento:</label>
    <input type="text" id="departamento" name="departamento" required><br><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" required><br><br>

    <button type="submit">Crear</button>
    <a href="{{route('invitado.index')}}">Atras</a>
</form>


@endsection