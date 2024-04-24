<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Http\Requests\PedidoRequest;
use Illuminate\Http\JsonResponse;

class PedidoController extends Controller
{

    public function index():JsonResponse
    {
        //Mostrar los pedidos
        $pedidos= Pedido::all();

        return response()->json($pedidos,200);
    }

  
    public function store(Request $request):JsonResponse
    {
        //despues de crear envia el status 201 fue exitoso
        Pedido::create($request->all());
        return response()->json([
        'estatus'=>'true'
        ],201);
    }

    public function show($id):JsonResponse
    {
        //mostrar los datos 

      $pedido = Pedido::find($id);
      return response()->json($pedido,200);
    }


    public function update(PedidoRequest $request, $id):JsonResponse
    {
        //se trae por medio del Id del Pedido que se quiere actualizar
    $pedido = Pedido::find($id);
    $pedido->fecha=$request->fecha;
    $pedido->cliente=$request->cliente;
    $pedido->cantidad=$request->cantidad;
    $pedido->valor=$request->valor;
     $pedido->save();

       return response()->json([
    'estatus'=>'true'
       ],200);

    }


    public function destroy($id):JsonResponse
    {
        //Eliminados el pedido

        Pedido::find( $id)->delete();

        return response()->json( [
        'estatus'=>'true'
        ],200);


    }
}
