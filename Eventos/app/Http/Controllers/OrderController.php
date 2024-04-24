<?php

namespace App\Http\Controllers;

use App\Events\CreateOrderEvent;
use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function create()
    {

        $order =order::create([
            'user_id' => 20,
            'amount'=> 25

        ]);

       
        return response()->json( "Exito");
    }
}
