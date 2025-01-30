<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediatorProductImage extends Model
{
    protected $fillable = [
        "product_id",
        "image_product_id"
    ];
}
