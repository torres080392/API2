<?php

namespace App\Http\Controllers;

use App\Models\Cliente;



use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //

    public function index(){

         $clientes = Cliente::find(2);
        return view('cliente.index', compact('clientes'));


    }
}
