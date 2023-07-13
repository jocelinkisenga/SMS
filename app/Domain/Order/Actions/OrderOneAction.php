<?php

namespace App\Domain\Order\Actions;
use App\Domain\Order\Models\Order;

class OrderOneAction
{
    public static function handle(int $id)
    {
        try {
            return Order::find($id);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
