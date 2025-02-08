<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        "first_name",
        "last_name",
        "email",
        "address",
        "phone",
        "other_notes",
        "quantity",
        "total",
        "status",
        "user_id"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, "order_items")->withPivot("total", "quantity" , "product_id", "order_id");
    }
}
