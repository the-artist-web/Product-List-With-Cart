<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $fillable = [
        "total",
        "quantity",
        "product_id",
        "order_id"
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class, "order_items")->withPivot("total", "quantity" , "product_id", "order_id");
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, "order_items")->withPivot("total", "quantity" , "product_id", "order_id");
    }
}
