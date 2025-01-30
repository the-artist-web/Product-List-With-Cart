<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediatorProductOrder extends Model
{
    protected $fillable = [
        "count",
        "total",
        "order_id",
        "product_id"
    ];
}
