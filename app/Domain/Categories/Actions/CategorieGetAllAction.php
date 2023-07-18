<?php

namespace App\Domain\Categories\Actions;

use App\Domain\Categories\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategorieGetAllAction
{
    public static function handle()
    {
        return Category::where('user_id', Auth::user()->id)->get();
    }
}
