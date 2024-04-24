<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use App\Models\Producto;
use App\Models\Categoria;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Liwevireproducto extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $categoria_id;
    public $nombre = '';
    public $descripcion = '';
    public $precio = '';
    public $stock = '';
    public $mensaje = '';
    public $imagen;
    public $producto;
    public $actualizando;

    public function render()
    {

        $paginas = Producto::simplePaginate(5);
        $categorias = Categoria::all();
        //$productos = Producto::all(); Se remplaza por la paginacion
        return view('livewire.liwevireproducto', compact('categorias', 'paginas'));
    }

    protected $rules = [
        'nombre' => 'required',
        'descripcion' => 'required',
        'imagen' => 'required|image|max:1024', // Añadido la validación de imagen y tamaño máximo
        'stock' => 'required|numeric',
        'categoria_id' => 'required',
        'precio' => 'required|numeric',
    ];

    private function resetForm()
    {
        $this->reset([
            'nombre',
            'descripcion',
            'precio',
            'stock',
            'categoria_id',
            'imagen',
        ]);
    }




    public function crearProducto()
    {

        // Guardar la imagen y obtener la ruta
        $imagenPath = $this->imagen->store('public/images');
        $imagenUrl = asset('storage/' . str_replace('public/', '', $imagenPath));

        // Crear el producto con los datos validados y la URL de la imagen
        Producto::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'precio' => $this->precio,
            'stock' => $this->stock,
            'categoria_id' => $this->categoria_id,
            'imagen' => $imagenUrl,
        ]);

        $this->resetForm();
        session()->flash('message', 'Producto creado exitoxamente.');
    }

    
    public function edit($id)
    {


        $producto = Producto::find($id);
        $this->nombre = $producto->nombre;
        $this->descripcion = $producto->descripcion;
        $this->precio = $producto->precio;
        $this->stock = $producto->stock;
        $this->imagen = $producto->imagen;
        $this->categoria_id = $producto->categoria_id;

        $this->actualizando = true; // Cambia a modo actualización
        session()->flash('message', 'Realice los cambios y oprima la opcion de actualizar.');
    }

    public function update($id)
    {

        $producto = Producto::findOrFail($id);

        // Si se ha subido una nueva imagen, se guarda y se actualiza la URL de la imagen
        if ($this->imagen) {
            $imagenPath = $this->imagen->store('public/images');
            $producto->imagen = asset('storage/' . str_replace('public/', '', $imagenPath));
        }

        // Actualizar los demás campos del producto
        $producto->nombre = $this->nombre;
        $producto->descripcion = $this->descripcion;
        $producto->precio = $this->precio;
        $producto->stock = $this->stock;
        $producto->categoria_id = $this->categoria_id;
        $producto->save();
        $this->resetForm();
        session()->flash('message', 'Producto actualizado exitoxamente.');
    }


    public function delete($id)
    {
        Producto::destroy($id);
        session()->flash('message', 'Producto eliminado exitoxamente.');
    }
}
