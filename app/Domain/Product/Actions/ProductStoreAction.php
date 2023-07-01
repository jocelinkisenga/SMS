<?php

namespace App\Domain\Product\Actions;

use App\Domain\Products\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductStoreAction
{

    public static function handle($request): int
    {
        $product = Product::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'name' => $request->name,
            'code' => $request->code,
            'price' => $request->price,
            'quantity' => $request->quantity

        ]);
        return $product->id;

    }
}
