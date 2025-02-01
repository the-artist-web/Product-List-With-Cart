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

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
