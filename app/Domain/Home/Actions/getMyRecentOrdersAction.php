<?php

namespace App\Domain\Home\Actions;
use App\Domain\Order\Models\Order;
use Illuminate\Support\Facades\Auth;

class getMyRecentOrdersAction
{
    public static function handle():void
    {
        return Order::latest()->userId(Auth::user()->id)->limit(5)->get();
    }
}
