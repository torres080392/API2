<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href=" {{Route('create')}}">Crear Elementos</a>
    <h3>Lectura de todos los elementos </h3>

    <ul>
        @foreach($informaciones as $informacion)
        <tr>
            <td>{{ $informacion->nombre }}</td>
            <td>
                @if($informacion->Url_archivo)
                    <img src="{{ asset('storage/imagenes/' . $informacion->Url_archivo) }}" width="100px" alt="Imagen">
                    <form action="{{ route('informaciones.destroy', $informacion->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    
                @else
                    Sin imagen
                @endif
            </td>
        </tr>
    @endforeach
</ul>
   


</body>
</html>