<?php

namespace App\Domain\Categories\Actions;

use App\Domain\Categories\Models\Category;

class CategorieUpdateAction
{
    public static function handle(int $id, $request): void
    {
        Category::whereId($id)->update(['name' => $request->name]);
    }
}
