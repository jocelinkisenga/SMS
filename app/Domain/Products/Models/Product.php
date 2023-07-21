<?php

namespace App\Domain\Products\Models;

use App\Domain\Categories\Models\Category;
use App\Domain\Image\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'code',
        'price',
        'quantity',
    ];

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
