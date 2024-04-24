<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    //
    public function index()
    {
        return view('components.usuario');
    }
}
