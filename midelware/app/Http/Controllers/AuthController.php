<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function createUser(CreateUserRequest $request)
    {

        $user = User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->Hash::make($request->password)



        ]);

        return response()->json(['estatus' => true,
         'Message' => 'EL usuario ingresado con exito',
          $user->createToken("API TOKEN ")->plainTextToken], 200);
    }




    public function loginUser(LoginRequest $request)
    {
        Auth::user()->name; //son esto accedemos a la informacio del usuario 

        if (!Auth::attempt($request(['email', 'password']))); // con esto tratamos de logear el usuario 
        {

            return response()->json(['estatus' => 'false', 'message' => ' no se pudo autenticar el usuario '], 401);
        }

        $user = User::where('email', $request->email)->first();

        return response()->json([
            'estatus' => 'true',
            'message' => 'Logueado exitoxamente',
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);
    }
}
