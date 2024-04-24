<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear </title>
</head>

<body>
    <a href="{{ Route('index') }}">Regresar</a>
    <br />
    <form method="POST" action="{{Route('store')}}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nombre" id="nombre" placeholder="Nombre"> <br />
        <input type="file" name="file" id="archivo" placeholder="Archivo"> <br />
        <button type="submit">Guardar</button>
        

    </form>
</body>

</html>
