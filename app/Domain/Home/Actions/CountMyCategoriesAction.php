<?php

namespace App\Domain\Home\Actions;

use App\Domain\Categories\Models\Category;
use Auth;

class CountMyCategoriesAction
{
    public static function handle():void
    {
        return Category::userId(Auth::user()->id)->count();
    }
}
