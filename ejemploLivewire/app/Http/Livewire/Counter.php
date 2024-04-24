<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Persona;

class Counter extends Component
{
    public $nombre = "";
    public $documento = "";
    public $telefono = "";
    public $mensaje = "";
    public $personas;
    public $actualizando = false;
    protected $rules = [
        'nombre' => 'required',
        'documento' => 'required',
        'telefono' => 'required',
    ];

    public function mount()
    {
        $this->resetInputFields(); // Reinicia los campos al montar el componente
        $this->loadData(); // Carga los datos iniciales
    }


    public function store()
    {
        $this->validate();

        Persona::create([
            'nombre' => $this->nombre,
            'documento' => $this->documento,
            'telefono' => $this->telefono
        ]); //guardamos los datos 

        $this->mensaje = "Se guardo con exito";
        $this->resetMessageAfterDelay();
        $this->resetInputFields(); // Reinicia los campos después de guardar
        $this->loadData(); // Vuelve a cargar los datos


    }

    public function delete($id)
    {

        Persona::destroy($id); //Eliminar el registro

        $this->mensaje = "Se elimino satisfactoriamente";
        $this->resetMessageAfterDelay();
        $this->resetInputFields(); // Reinicia los campos después de eliminar
        $this->loadData(); // Vuelve a cargar los datos

    }

    public function edit($id)
    {
        $persona = Persona::find($id);
        $this->nombre = $persona->nombre;
        $this->documento = $persona->documento;
        $this->telefono = $persona->telefono;
        $this->actualizando = true; // Cambia a modo actualización
        $this->mensaje = "Por favor realice los cambios y despues oprima el boton ACTUALIZAR";
    }
    public function update($id)
    {
        $this->validate();
        $personaUpdate = Persona::find($id);
        $personaUpdate->nombre = $this->nombre;
        $personaUpdate->documento = $this->documento;
        $personaUpdate->telefono = $this->telefono;
        $personaUpdate->save();
        $this->mensaje = "Se actualizo satisfactoriamente";
        $this->resetMessageAfterDelay();
        $this->resetInputFields(); // Reinicia los campos después de actualizar
        $this->loadData(); // Vuelve a cargar los datos

    }

    private function resetInputFields()
    {
        $this->nombre = '';
        $this->documento = '';
        $this->telefono = '';
        $this->actualizando = false; // Asegura que no esté en modo actualización
    }

    private function loadData()
    {
        $this->personas = Persona::all(); // Carga los datos de personas
    }

    private function resetMessageAfterDelay()
    {
        $this->dispatchBrowserEvent('reset-message', ['timeout' => 2000]); // Envía un evento JavaScript para limpiar el mensaje después de 5 segundos
    }

    public function render()
    {
        $personas = Persona::all(); //le pasamos los dattos de la tabla en la base de datos
        return view('livewire.counter', compact('personas'));
    }
}
