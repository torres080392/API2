<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class Categoriaproducto extends Component
{
    use WithPagination;

    public $mensaje= "";
    public $nombre= "";
    public $descripcion= "";
    public $categoria;
    public $actualizando;
    
    public function render()
    {   $productos = Producto::all();
        $categorias = Categoria::simplePaginate(6);
        return view('livewire.categoriaproducto',compact('categorias','productos'));
    }


    public function crearCategoria()
    {
      

        // Crea un nuevo usuario con la contraseña hasheada
        Categoria::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
        ]);

        // Establece un mensaje de éxito
        $this->mensaje = "Se guardó con éxito";

        // Reinicia los campos después de guardar
        $this->resetInputFields();

        // Vuelve a cargar los datos
        $this->loadData();
    }


    private function resetInputFields()
    {
        $this->nombre = '';
        $this->descripcion = '';
        // Asegura que no esté en modo actualización
    }
    private function loadData()
    {
        $this->categoria = Categoria::all(); // Carga los datos de personas
    }

    public function delete($id)
    {

        Categoria::destroy($id); //Eliminar el registro

        $this->mensaje = "Se elimino satisfactoriamente";
        // $this->resetMessageAfterDelay();
        $this->resetInputFields(); // Reinicia los campos después de eliminar
        $this->loadData(); // Vuelve a cargar los datos

    }

    public function edit($id)
    {
        $persona = Categoria::find($id);
        $this->nombre = $persona->nombre;
        $this->descripcion = $persona->descripcion;
        

        $this->actualizando = true; // Cambia a modo actualización
        $this->mensaje = "Por favor realice los cambios y despues oprima el boton ACTUALIZAR";
    }

    public function update($id)
    {
        $this->validate();
        $personaUpdate = Categoria::find($id);
        $personaUpdate->nombre = $this->nombre;
        $personaUpdate->descripcion = $this->descripcion;
        $personaUpdate->save();
        $this->mensaje = "Se actualizo satisfactoriamente";
        $this->resetInputFields(); // Reinicia los campos después de actualizar
        $this->loadData(); // Vuelve a cargar los datos

    }

 

}
