<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShoppingCardController extends Controller
{
    public function shoppingCard()
    {
        return view("pages.shopping-card");
    }
}
