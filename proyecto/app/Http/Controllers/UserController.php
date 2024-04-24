<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Corregido el espacio de nombres del modelo User
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Accediendo al modelo User y utilizando el método all() para obtener todos los registros de la tabla

        return view('indexUser', ['users' => $users]); // Pasando el array de datos del modelo User a la vista
    }


    public function create()//Metodo para insertar datos de prueba
    {
       

        User::create([
        'name'=> "Yenny Gmez",
        'email'=> "Yenn1534@gmail.com",
        'password'=> Hash::make('1992045')
        ]);

        return redirect()->route('indexUser');

    }



}





