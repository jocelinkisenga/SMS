<?php

namespace App\Domain\Image\Services;

use App\Domain\Image\Actions\ImageAction;
use App\Domain\Image\Actions\ImageSaveAction;

class ImageService
{
    public function __construct(
        public ImageAction $imageAction,
        public ImageSaveAction $imageSaveAction,
    ) {
    }

    public function uploadOneImage($image) : string
    {
      return   $this->imageAction->handle($image);
    }

    public function imageSave($productId, $fileName){
        $this->imageSaveAction->handle($productId, $fileName);
    }
}
