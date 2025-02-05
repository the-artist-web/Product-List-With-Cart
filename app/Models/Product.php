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

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, "mediator_product_orders")->withPivot("count", "total" , "product_id");
    }

    public function imageProducts()
    {
        return $this->belongsToMany(ImageProduct::class, "mediator_product_images");
    }
}