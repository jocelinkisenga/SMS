<?php

namespace App\Domain\Order\Services;

use App\Domain\Order\Actions\OrderAllAction;
use App\Domain\Order\Actions\OrderOneAction;

class OrderService
{
    public function __construct(
        public OrderAllAction $orderAllAction,
        public OrderOneAction $orderOneAction,

    ) {
    }

    /**
     * Summary of all
     * @return void
     */
    public function all(){
        return $this->orderAllAction->handle();

    }

    public function one(int $orderId){
        return $this->orderOneAction->handle($orderId);
    }

    public function delete(){

    }

}
