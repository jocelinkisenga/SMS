<?php

namespace App\Domain\Products\Actions;

use App\Domain\Products\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductGetAllAction
{
    public static function handle()
    {
        return Product::latest()->where('user_id',Auth::user()->id)->get();
    }
}
