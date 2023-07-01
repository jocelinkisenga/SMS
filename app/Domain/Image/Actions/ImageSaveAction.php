<?php

namespace App\Domain\Image\Actions;

use App\Domain\Image\Models\Image;

class ImageSaveAction
{
    public static function handle($productId, $fileName)
    {
        Image::create([
            'product_id' => $productId,
            'image' => $fileName
        ]);
    }
}
