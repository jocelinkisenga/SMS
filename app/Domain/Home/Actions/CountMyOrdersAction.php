<?php

namespace App\Domain\Home\Actions;

use App\Domain\Order\Models\Order;
use Auth;

class CountMyOrdersAction
{
    public static function handle(): void
    {
        // return Order::UserId(Auth::user()->id)->count();
    }
}
