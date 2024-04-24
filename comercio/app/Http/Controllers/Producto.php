<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Producto extends Controller
{
    //
    public function index()
    {
        return view('components.producto');
    }
}
