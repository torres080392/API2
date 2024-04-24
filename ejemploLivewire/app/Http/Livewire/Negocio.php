<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
class Negocio extends Component
{
    public function render()
    {
        
        $productos = Producto::all(); 
        return view('livewire.negocio', compact('productos'));
    }
}
