<div class="container mt-5">
    <p class="text-green-500">{{ $mensaje }}</p>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <!-- Columna para el formulario -->
        <div>
            <h3 class="text-xl font-bold mb-4">Formulario para crear usuarios</h3>

            <form wire:submit.prevent="crearUsuario" class="space-y-4">
                <div class="mb-3">
                    <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
                    <input wire:model.lazy='nombre' type="text" class="form-input mt-1 block w-full rounded-md shadow-sm" id="nombre" name="nombre"
                        placeholder="Nombre" required>
                    @error('nombre')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="correo" class="block text-sm font-medium text-gray-700">Correo:</label>
                    <input wire:model.lazy='correo' type="text" class="form-input mt-1 block w-full rounded-md shadow-sm" id="correo" name="correo"
                        placeholder="Correo" required>
                    @error('correo')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="contraseña" class="block text-sm font-medium text-gray-700">Contraseña:</label>
                    <input wire:model.lazy='contraseña' type="text" class="form-input mt-1 block w-full rounded-md shadow-sm" id="contraseña" name="contraseña"
                        placeholder="Contraseña" required>
                    @error('contraseña')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección:</label>
                    <input wire:model.lazy='direccion' type="text" class="form-input mt-1 block w-full rounded-md shadow-sm" id="direccion" name="direccion"
                        placeholder="Dirección" required>
                    @error('direccion')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Guardar
                </button>
            </form>
        </div>

        <!-- Columna para la tabla -->
        <div>
            <h3 class="text-xl font-bold mb-4">Listado de usuarios</h3>
            <table class="table-auto w-full">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th scope="col" class="px-4 py-2">Id</th>
                        <th scope="col" class="px-4 py-2">Nombre</th>
                        <th scope="col" class="px-4 py-2">Correo</th>
                        <th scope="col" class="px-4 py-2">Dirección</th>
                        <th scope="col" class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td class="border px-4 py-2">{{ $usuario->id }}</td>
                            <td class="border px-4 py-2">{{ $usuario->nombre }}</td>
                            <td class="border px-4 py-2">{{ $usuario->correo }}</td>
                            <td class="border px-4 py-2">{{ $usuario->direccion }}</td>
                            <td class="border px-4 py-2">
                                <button wire:click="edit({{ $usuario->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    Editar
                                </button>
                                <button wire:click="update({{ $usuario->id }})" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    Actualizar
                                </button>
                                <button wire:click="delete({{ $usuario->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    Eliminar
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
