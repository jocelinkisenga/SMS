<?php

namespace App\Domain\Home\Actions;

use App\Domain\Products\Models\Product;
use Illuminate\Support\Facades\Auth;

class getMyRecentProductsAction
{
    public static function handle(): void
    {
        // return Product::latest()->userId(Auth::user()->id)->limit(5)->get();
    }
}
