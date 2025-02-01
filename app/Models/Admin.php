<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = [
        "name",
        "email",
        "password",
        "bio",
        "role"
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
