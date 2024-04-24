<div class="container mt-5">
    <h3>Formulario</h3>
    <p style="color: green">{{ $mensaje }}</p>
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre:</label>
        <input wire:model='nombre' type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
        @error('nombre') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="documento" class="form-label">Documento:</label>
        <input wire:model='documento' type="text" class="form-control" id="documento" name="documento" placeholder="Documento" required>
        @error('documento') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono:</label>
        <input wire:model='telefono' type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
        @error('telefono') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <button wire:click='store' type="submit" class="btn btn-primary">Guardar</button>

 
<br/>
<br/>
<br/>

<h3>Listado </h3>

    <table class="table mt-4">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Documento</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
                <tr>
                    <td>{{ $persona->id }}</td>
                    <td>{{ $persona->nombre }}</td>
                    <td>{{ $persona->documento }}</td>
                    <td>{{ $persona->telefono }}</td>
                    <td>
                        <button wire:click="edit({{ $persona->id }})" class="btn btn-info">Seleccionar</button>
                        <button wire:click="update({{ $persona->id }})" class="btn btn-success">Actualizar</button>
                        <button wire:click="delete({{ $persona->id }})" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('reset-message', ({ timeout }) => {
                setTimeout(() => {
                    @this.set('mensaje', ''); // Limpia el mensaje después del tiempo especificado
                }, timeout);
            });
        });
    </script>
    
</div>
