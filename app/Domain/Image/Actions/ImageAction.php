<?php

namespace App\Domain\Image\Actions;

class ImageAction
{
    public static function handle($image): string
    {
        $fileName = time().'.'.$image->file('image')->getClientOriginalName();
        $path = $image->file('image')->storeAs('uploads', $fileName, 'public');

        return $fileName;
    }
}
