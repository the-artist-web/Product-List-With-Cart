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
        "quantity",
        "admin_id"
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, "carts")->withPivot("quantity", "product_id", "user_id");
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, "order_item")->withPivot("total", "quantity" , "product_id", "order_id");
    }

    public function imageProducts()
    {
        return $this->belongsToMany(ImageProduct::class, "mediator_product_images");
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}