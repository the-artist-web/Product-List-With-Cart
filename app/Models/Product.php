<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "title",
        "content",
        "price",
        "off",
        "stock",
        "admin_id"
    ];
}