<?php

namespace App\Observers;

use App\Models\invoise;
use App\Models\order;

class OrderObserver
{

    public function created(order $order)
    {
    invoise::create([
    'amount' => $order->amount,
    'order_id' => $order->id

     ]);
    }


    public function updated(order $order)
    {
        //
    }

    public function deleted(order $order)
    {
        //
    }


    public function restored(order $order)
    {
        //
    }


    public function forceDeleted(order $order)
    {
        //
    }
}
