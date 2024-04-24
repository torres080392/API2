@if ($mensaje = Session::get('exito'))

<div style="padding: 7px; background-color:green">
    <p>{{$mensaje}}</p>
</div>
@endif
@if ($mensaje = Session::get('eliminado'))

<div style="padding: 7px; background-color: red">
    <p>{{$mensaje}}</p>
</div>



    
@endif