<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invitado;

class InvitadoControlller extends Controller
{

    public function  index()
    {
        $invitados = Invitado::all();

        return view('invitado.index', compact('invitados'));
    }

    public function create()
    {
        return view('invitado.create');
    }

    public function guarda(Request $request) //recepcion del formulario
    {
        Invitado::create($request->all());
        return redirect()->route('invitado.index')->with('exito','El invitado fue creado exitosamente'); //redirige alos invitados  y lanza mensaje de exito

    }

    public function edita(Invitado $invitado) //edita un registro
    {
        return view('invitado.edita', compact('invitado')); // le pamos a la vista los datos 

    }

    public function update(Request $request, Invitado $invitado)
    { //nos busca el obgeto para aplicar el update

        $invitado->update($request->all());
        return redirect()->route('invitado.index'); //redirige alos invitados
    }

    public function  mostrar(Invitado $invitado)
    {

        return view('invitado.mostrar', compact('invitado'));
    }

    public function  delete(Invitado $invitado)
    {
        $invitado->delete();
        return redirect()->route('invitado.index')->with('eliminado','El invitado fue eliminado exitosamente'); //redirige alos invitados  y lanza mensaje de exito
    }
}
