<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use PhpParser\Node\Stmt\Return_;

class EjemploController extends Controller
{
    //

    public function index()
    {
        return Inertia::render('ejemploInertia');
    }
}
