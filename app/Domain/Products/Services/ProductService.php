<?php

namespace App\Domain\Products\Services;
use App\Domain\Product\Actions\ProductStoreAction;

class ProductService
{

    public function __construct(public ProductStoreAction $productStoreAction){

    }
    public function all(){

    }

    public function one(){

    }

    public function create($request){
        $this->productStoreAction->handle();

    }

    public function delete(){

    }

    public function update(){

    }
}
