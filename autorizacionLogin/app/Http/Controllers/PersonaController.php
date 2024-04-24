<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Telefono;

class PersonaController extends Controller
{
   
    public function index()
    {
        //
        
       $personas= Persona::with('telefonos')->get();
       //$personas= Persona::find(1);
        return view('index',compact('personas'));

    }

    
    
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }

  
    public function delete(Persona $persona )
    {
        //
        $persona->delete();
        return redirect()->route('index')->with('eliminado','La persona fue eliminado exitosamente'); 
    }
}
