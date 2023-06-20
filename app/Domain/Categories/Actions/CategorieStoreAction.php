<?php

namespace App\Domain\Categories\Actions;
use App\Domain\Categories\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategorieStoreAction
{
    public static function handle($resquest):bool
    {
        Category::create(["user_id"=>Auth::user()->id,"name" => $resquest->name]);
        return true;
    }
}
