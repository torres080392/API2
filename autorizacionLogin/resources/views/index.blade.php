<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Personas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-lg font-semibold mb-4">INFORMACIÓN PERSONAL</h3>
                    @forelse ($personas as $persona)
                        <div class="mb-8">
                            <table class="min-w-full divide-y divide-gray-200">
                                <tbody>
                                    <tr>
                                        <td class="py-2 font-semibold">Nombres:</td>
                                        <td class="py-2">{{ $persona->nombre }}</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 font-semibold">Apellido:</td>
                                        <td class="py-2">{{ $persona->apellido }}</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 font-semibold">Teléfono:</td>
                                        <td class="py-2">{{ $persona->telefono }}</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 font-semibold">Edad:</td>
                                        <td class="py-2">{{ $persona->edad }}</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 font-semibold">Acciones:</td>
                                        <td class="py-2">
                                            <form method="POST" action="{{ route('persona.delete', $persona->id) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded shadow-md">
                                                    Eliminar
                                                </button>                                                
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <h3 class="text-lg font-semibold my-4">EQUIPOS CELULARES A SU NOMBRE</h3>
                                        </td>
                                    </tr>
                                    @foreach ($persona->telefonos as $telefono)
                                        <tr>
                                            <td class="py-2 font-semibold">Marca:</td>
                                            <td class="py-2">{{ $telefono->marca }}</td>
                                        </tr>
                                        <tr>
                                            <td class="py-2 font-semibold">Referencia:</td>
                                            <td class="py-2">{{ $telefono->referencia }}</td><tr/>
                                        </tr>
                                        <tr>
                                            <td class="py-2 font-semibold">Precio:</td>
                                            <td class="py-2">{{ $telefono->precio }}</td><tr/>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @empty
                        <p>No hay datos</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
