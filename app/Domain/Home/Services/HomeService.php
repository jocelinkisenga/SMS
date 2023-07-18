<?php

namespace App\Domain\Home\Services;

use App\Domain\Home\Actions\CountMyCategoriesAction;
use App\Domain\Home\Actions\CountMyOrdersAction;
use App\Domain\Home\Actions\CountMyProductAction;
use App\Domain\Home\Actions\getMyRecentOrdersAction;
use App\Domain\Home\Actions\getMyRecentProductsAction;

class HomeService
{
    public function __construct(

        public CountMyProductAction $countMyProductAction,
        public getMyRecentProductsAction $getMyRecentProductsAction,
        public getMyRecentOrdersAction $getMyRecentOrdersAction,
        public CountMyOrdersAction $countMyOrdersAction,
        public CountMyCategoriesAction $countMyCategoriesAction
    ) {
        // code...
    }

    public function countMyProducts()
    {
        return $this->countMyProductAction->handle();
    }

    public function CountMyCategories()
    {
        return $this->countMyCategoriesAction->handle();
    }

    public function CountMyOrders()
    {

    }

    public function getRecentProduct()
    {

    }

    public function getRecentOrders()
    {

    }
}
