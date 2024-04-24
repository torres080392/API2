<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class Buscador extends Component
{
    use WithPagination;

    public $search = '';
    public $results = [];
    public $showlist = false;
    public $product;

    public function searchProduct()
    {
        $this->results = Producto::where('nombre', 'like', '%' . $this->search . '%')->get();
        $this->showlist = true;
    }

    public function getProduct($id)
    {
        $this->product = Producto::find($id);
        $this->showlist = false;
    }

  
    public function resetBusqueda()
    {
        $this->reset([
            'search',

        ]);
    }

    public function render()
    {

        return view('livewire.buscador');
    }

}
