<?php

namespace App\Domain\Products\Services;

use App\Domain\Image\Services\ImageService;
use App\Domain\Product\Actions\ProductStoreAction;

class ProductService
{
    public readonly ?string $newImageName;

    public function __construct(
        public ProductStoreAction $productStoreAction,
        public ImageService $imageService,
    ){

    }
    public function all(){

    }

    public function one(){

    }

    public function create($request){
        if($request->hasFile('image')){
            $this->newImageName = $this->imageService->uploadOneImage($request, );
        }
       $productId = $this->productStoreAction->handle($request, );
       $this->imageService->ImageSave($productId, $this->newImageName, );

    }

    public function delete(){

    }

    public function update(){

    }
}
