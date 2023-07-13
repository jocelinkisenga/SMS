<?php

namespace App\Domain\Order\Actions;

use App\Domain\Order\Models\Order;

class OrderAllAction
{
    public static function handle():void
    {
        return Order::latest()->where("user_id","=",Auth::user()->id)->get();
    }
}
