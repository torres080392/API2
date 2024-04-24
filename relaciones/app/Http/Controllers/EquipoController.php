<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    //

    public function index(){

        $equipos = Equipo::find(1);
        return view('index',compact('equipos'));


    }
}
