<?php

namespace App\Domain\Categories\Actions;
use App\Domain\Categories\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategorieGetOneAction
{
    public static function handle(int $id): array
    {
        return Category::whereId($id)->where("user_id",Auth::user()->id)->first();


    }
}
