<?php

namespace App\Http\Controllers;

use App\Http\Requests\infoRequest;
use App\Models\Informacion;
use Illuminate\Http\Request;

class InformacionController extends Controller
{
    public function index()
    {
        $informaciones = Informacion::all();
        return view('index', compact('informaciones'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(infoRequest $request)
    {
        $fileName = time() . '.' . $request->file('file')->extension(); // Obtener la extensión del archivo

        $request->file('file')->storeAs('public/imagenes', $fileName); // Mover el archivo a la carpeta public/imagenes

        $informacion = new Informacion;
        $informacion->nombre = $request->nombre;
        $informacion->Url_archivo = $fileName;
        $informacion->save();

        return redirect()->route('index');
    }
    public function destroy($id)
    {
        $informacion = Informacion::findOrFail($id);
        $informacion->delete();
        return redirect()->route('index');
        
    }
}
