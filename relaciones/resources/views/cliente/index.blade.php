<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Hola {{ $clientes->nombre }} estos son los datos de tus compras</h1>
</body>
<table>

    <ul>
        @forelse ($clientes->compras as $compra)
            <li>Nombre:{{ $clientes->nombre }}</li>
            <li>Documento:{{ $clientes->documento }}</li>
            <li>Telefono:{{ $clientes->telefono }}</li>
            <li>Sim:{{ $clientes->equipoSim->empresa }}</li>
            <li>Serial:{{ $clientes->equipoSim->serial }}</li>
            <li>Valor compra:{{ $compra->valor }}</li>
            <li>Fecha de compra:{{ $compra->created_at }}</li><br />




        @empty
            <h1>No hay datos</h1>
        @endforelse
    </ul>
</table>

</html>
