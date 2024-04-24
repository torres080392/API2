<div>
    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->tipo }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>
                        <button wire:click="edit({{ $producto->id }})" class="btn btn-info">Seleccionar</button>
                        <button wire:click="update({{ $producto->id }})" class="btn btn-success">Actualizar</button>
                        <button wire:click="delete({{ $producto->id }})" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
