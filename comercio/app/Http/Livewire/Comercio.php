<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Usuario;
use Database\Seeders\UsuarioSeeder;
use Illuminate\Support\Facades\Hash;

class Comercio extends Component
{

    public $nombre = "";
    public $correo = "";
    public $contraseña = "";
    public $direccion = "";
    public $mensaje = "";
    public $usuarios;
    public $actualizando;

    protected $rules = [
        'nombre' => 'required',
        'correo' => 'required',
        'contraseña' => 'required',
        'direccion' => 'required',
    ];


    public function mount()
    {
        $this->resetInputFields(); // Reinicia los campos al montar el componente
        $this->loadData(); // Carga los datos iniciales
    }

    private function loadData()
    {
        $this->usuarios = Usuario::all(); // Carga los datos de personas
    }

    public function crearUsuario()
    {
        $this->validate();
       

        // Crea un nuevo usuario con la contraseña hasheada
        Usuario::create([
            'nombre' => $this->nombre,
            'correo' => $this->correo,
            'contraseña' => Hash::make($this->contraseña), // Almacena el hash seguro en lugar de la contraseña en texto plano
            'direccion' => $this->direccion,
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
        $this->correo = '';
        $this->contraseña = '';
        $this->direccion = ''; // Asegura que no esté en modo actualización
    }

    public function delete($id)
    {

        Usuario::destroy($id); //Eliminar el registro

        $this->mensaje = "Se elimino satisfactoriamente";
        // $this->resetMessageAfterDelay();
        $this->resetInputFields(); // Reinicia los campos después de eliminar
        $this->loadData(); // Vuelve a cargar los datos

    }





    public function edit($id)
    {
        $persona = Usuario::find($id);
        $this->nombre = $persona->nombre;
        $this->correo = $persona->correo;
        $this->direccion = $persona->direccion;

        $this->actualizando = true; // Cambia a modo actualización
        $this->mensaje = "Por favor realice los cambios y despues oprima el boton ACTUALIZAR";
    }
    public function update($id)
    {
        $this->validate();
        $personaUpdate = Usuario::find($id);
        $personaUpdate->correo = $this->correo;
        $personaUpdate->contraseña = Hash::make($this->contraseña);
        $personaUpdate->direccion = $this->direccion;
        $personaUpdate->save();
        $this->mensaje = "Se actualizo satisfactoriamente";
        $this->resetInputFields(); // Reinicia los campos después de actualizar
        $this->loadData(); // Vuelve a cargar los datos

    }





    public function render()
    {
        $usuarios = Usuario::all();
        return view('livewire.comercio', compact('usuarios'));
    }
}
