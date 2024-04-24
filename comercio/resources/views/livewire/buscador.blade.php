<div class="container mt-3">
    <div class="row">
        <div class="form-group col-md-12">
            <label for="search">Buscar</label>
            <input wire:model="search" wire:keyup="searchProduct" type="text" class="
    border-b border-gray-300 rounded-t-md shadow-sm 
    focus:border-indigo-500 focus:ring-indigo-500
    w-full py-2 px-4 text-sm focus:outline-none" 
    placeholder="Ingresa el nombre del producto">

            @if($showlist)
                <div class="mt-3">
                    <table class="table table-striped w-full">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Id
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nombre
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Descripción
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Precio
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Stock
                                </th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Imagen
                                </th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($results))
                                @foreach($results as $result)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">
                                            {{ $result->id }}
                                         </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-700">
                                           {{ $result->titulo }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $result->descripcion }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $result->precio }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                            {{ $result->stock }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <img src="{{ asset($result->imagen) }}" alt="{{ $result->nombre }}" class="w-24 h-auto">
                                        </td>
                                        
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
    <table class="min-w-full divide-y divide-gray-200">
        <tbody class="bg-white divide-y divide-gray-200">
            @if(!empty($product))
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" wire:model="product.nombre" id="nombre" name="nombre" class="form-input rounded-md shadow-sm w-full" value="{{ $product->nombre }}">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                        <input type="text" wire:model="product.descripcion" id="descripcion" name="descripcion" class="form-input rounded-md shadow-sm w-full" value="{{ $product->descripcion }}">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <label for="stock" class="block text-sm font-medium text-gray-700">Cantidad</label>
                        <input type="text" wire:model="product.stock" id="stock" name="stock" class="form-input rounded-md shadow-sm w-full" value="{{ $product->stock }}">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <label for="precio" class="block text-sm font-medium text-gray-700">Precio</label>
                        <input type="text" wire:model="product.precio" id="precio" name="precio" class="form-input rounded-md shadow-sm w-full" value="{{ $product->precio }}">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <img src="{{ asset($product->imagen) }}" alt="{{ $product->nombre }}" class="w-24 h-auto">
                    </td>
                    
                </tr>
            @endif
        </tbody>
    </table>
      
    
</div>

