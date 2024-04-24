<div class="container mt-5">
    <p class="text-green-500">{{ $mensaje }}</p>
    <div class="container mx-auto px-4 py-8">
        <!-- Columna para el formulario -->
        <div class="md:col-span-1">
            <h3 class="text-xl font-bold mb-3">Formulario para crear categorías</h3>

            <div class="mb-3">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
                <input wire:model='nombre' type="text" class="form-input mt-1 block w-full rounded-md shadow-sm" id="nombre" name="nombre"
                    placeholder="Nombre" required>
                @error('nombre')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción:</label>
                <textarea wire:model='descripcion' class="form-textarea mt-1 block w-full rounded-md shadow-sm" id="descripcion" name="descripcion"
                    placeholder="Descripción" required></textarea>
                @error('descripcion')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <button wire:click='crearCategoria' type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h8a2 2 0 012 2v2h1a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h1V5zm9 4v2H8V9h4zm0 4v2H8v-2h4z" clip-rule="evenodd" />
                </svg>
                Guardar
            </button>
            
        </div>
        <!-- Columna para la tabla -->
        <div class="md:col-span-1">
            <h3 class="text-xl font-bold mb-3">Listado de Categorías</h3>
            <table class="table-auto w-full">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th scope="col" class="px-4 py-2">Id</th>
                        <th scope="col" class="px-4 py-2">Nombre</th>
                        <th scope="col" class="px-4 py-2">Descripción</th>
                        <th scope="col" class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categorias as $categoria)
                        <tr>
                            <td class="border px-4 py-2">{{ $categoria->id }}</td>
                            <td class="border px-4 py-2">{{ $categoria->nombre }}</td>
                            <td class="border px-4 py-2">{{ $categoria->descripcion }}</td>
                            <td class="border px-4 py-2">
                                <button wire:click="edit({{ $categoria->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 5a2 2 0 012-2h8a2 2 0 012 2v2h1a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h1V5zm9 4v2H8V9h4zm0 4v2H8v-2h4z" clip-rule="evenodd" />
                                    </svg>
                                    Editar
                                </button>
                                
                                <button wire:click="update({{ $categoria->id }})" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M14.473 3.037a.75.75 0 011.06 1.06l-9.353 9.354a.75.75 0 01-1.06 0L3 11.207l-.646.647a.75.75 0 01-1.06-1.06l.647-.647-1.354-1.354a.75.75 0 010-1.06l9.354-9.354a.75.75 0 011.06 0zm-5.47 13.686l9.353-9.354a.75.75 0 000-1.06l-1.354-1.354a.75.75 0 00-1.06 0l-9.354 9.354a.75.75 0 001.06 1.06l1.354-1.354.647.647zM16 13.207l-3.5 3.5a.75.75 0 01-1.06 0l-7-7a.75.75 0 011.06-1.06l7 7a.75.75 0 001.06 0l3.5-3.5a.75.75 0 00-1.06-1.06l-3.5 3.5-6.94-6.94a.75.75 0 00-1.06 1.06l7 7a.75.75 0 001.06 0l6.94-6.94-1.06-1.06z" clip-rule="evenodd" />
                                    </svg>
                                    Actualizar
                                </button>
                                
                                <button wire:click="delete({{ $categoria->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.566 14.75A4.999 4.999 0 0010 16h0a4.999 4.999 0 004.434-2.75C16.903 13.658 20 9.725 20 6a5 5 0 00-10 0c0 3.725 3.097 7.658 6.566 8.75A.75.75 0 0016 13a.75.75 0 00.566-1.25A6.486 6.486 0 0110 10a6.486 6.486 0 01-6.566-4.25A.75.75 0 003.999 5a.75.75 0 00-.566 1.25A5.001 5.001 0 0010 14h0a5.001 5.001 0 004.434-2.75.75.75 0 00-1.068-1.057A3.501 3.501 0 0110 13h0a3.501 3.501 0 01-3.866-1.807.75.75 0 00-1.068 1.057z" clip-rule="evenodd" />
                                    </svg>
                                    Eliminar
                                </button>
                                
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No hay datos</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-4">
                {{ $categorias->onEachSide(5)->links() }}
            </div>
        </div>
    </div>
</div>

