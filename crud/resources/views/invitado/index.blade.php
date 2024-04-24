
@extends('layouts.app')
@extends('layouts.sidebar')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/styleIndex.css') }}">
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($invitados as $invitado)
            <tr>
                <td>{{ $invitado->nombre }}</td>
                <td>{{ $invitado->apellido }}</td>
                <td class="actions">
                    <div class="buttons-container">
                        <a href="{{ route('invitado.mostrar', $invitado->id) }}" class="btn">Ver</a>
                        <a href="{{ route('invitado.edita', $invitado->id) }}" class="btn">Editar</a>
                        <form method="POST" action="{{ route('invitado.delete', $invitado->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">No hay registros</td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection

