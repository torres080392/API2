<div class="container mt-4">
    <div class="container mx-auto px-4 py-4">
        <div>
            @if (session()->has('message'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('message') }}</span>
                </div>
            @endif
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Columna para el formulario -->
            <div class="md:col-span-1 bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold mb-4">Crear producto</h3>
    
                <form wire:submit.prevent="crearProducto" enctype="multipart/form-data" class="space-y-4">
                    <div class="mb-4">
                        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
                        <input wire:model.lazy='nombre' type="text" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" id="nombre" name="nombre"
                            placeholder="Nombre" required>
                        @error('nombre')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción:</label>
                        <textarea wire:model.lazy='descripcion' class="form-textarea mt-1 block w-full rounded-md border-gray-300 shadow-sm" id="descripcion" name="descripcion"
                            placeholder="Descripción" required></textarea>
                        @error('descripcion')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="precio" class="block text-sm font-medium text-gray-700">Precio:</label>
                        <input wire:model.lazy='precio' type="number" step="0.01" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" id="precio"
                            name="precio" placeholder="Precio" required>
                        @error('precio')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="stock" class="block text-sm font-medium text-gray-700">Stock:</label>
                        <input wire:model.lazy='stock' type="number" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" id="stock" name="stock"
                            placeholder="Stock" required>
                        @error('stock')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="imagen" class="block text-sm font-medium text-gray-700">Imagen:</label>
                        <input wire:model='imagen' type="file" class="form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm" id="imagen" name="imagen"
                            accept="image/*" required>
                        @error('imagen')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="categoria" class="block text-sm font-medium text-gray-700">Categoría:</label>
                        <select wire:model="categoria_id" class="form-select mt-1 block w-full rounded-md border-gray-300 shadow-sm" id="categoria" name="categoria" required>
                            <option value="">Seleccionar categoría</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                            @endforeach
                        </select>
                        @error('categoria_id')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary py-2 px-4 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    
        <div class="container mx-auto px-4 py-8">
            <h3 class="text-2xl font-bold mb-4">Listado de productos</h3>
            <div class="overflow-x-auto">
                <table class="table-auto w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2 text-left">Id</th>
                            <th class="px-4 py-2 text-left">Nombre</th>
                            <th class="px-4 py-2 text-left">Descripción</th>
                            <th class="px-4 py-2 text-left">Precio</th>
                            <th class="px-4 py-2 text-left">Stock</th>
                            <th class="px-4 py-2 text-left">Imagen</th>
                            <th class="px-4 py-2 text-left">Categoría</th>
                            <th class="px-4 py-2 text-left">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($paginas as $pagina)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="px-4 py-2">{{ $pagina->id }}</td>
                                <td class="px-4 py-2">{{ $pagina->nombre }}</td>
                                <td class="px-4 py-2">{{ $pagina->descripcion }}</td>
                                <td class="px-4 py-2">{{ $pagina->precio }}</td>
                                <td class="px-4 py-2">{{ $pagina->stock }}</td>
                                <td class="px-4 py-2">
                                    <img src="{{ asset($pagina->imagen) }}" alt="{{ $pagina->nombre }}" class="w-24 h-auto">
                                </td>
                                <td class="px-4 py-2">{{ $pagina->categoria ? $pagina->categoria->nombre : 'N/A' }}</td>                                <td class="px-4 py-2">
                                    <button wire:click="edit({{ $pagina->id }})"
                                        class="px-4 py-2 bg-blue-500 text-white rounded-md shadow-md hover:bg-blue-600">Editar</button>
                                    
                                    <button wire:click="update({{ $pagina->id }})"
                                        class="px-4 py-2 bg-green-500 text-white rounded-md shadow-md hover:bg-green-600">Actualizar</button>
                                    
                                    <button wire:click="delete({{ $pagina->id }})"
                                        class="px-4 py-2 bg-red-500 text-white rounded-md shadow-md hover:bg-red-600">Eliminar</button>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="mt-4">
                {{ $paginas->onEachSide(5)->links() }}
            </div>
        </div>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>