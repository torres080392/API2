<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidaController extends Controller
{
    

 public function index(){

    $mensaje= __('bienvenida.saludo');

    return view('Bienvenida',compact('mensaje'));


 }
}
