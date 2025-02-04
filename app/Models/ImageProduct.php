<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    protected $fillable = [
        "main_image",
        "images"
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, "mediator_product_images");
    }
}
