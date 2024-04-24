<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @forelse ($productos as $producto)

    <di>
       <h3>{{$producto->id}}</h3> 
       <h3>{{$producto->nombre}}</h3> 
       <h3>{{$producto->descripcion}}</h3> 
       <h3>{{$producto->precion}}USD</h3> 
    
    
    </di>
        
    @empty
        <p>No hay productos</p>
    @endforelse
</body>
</html>