<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function shoppingCard()
    {
        $carts = Cart::with("product")->where("user_id", Auth::user()->id)->orderBy("created_at", "desc")->get();

        return view("pages.shopping-card", compact("carts"));
    }
}
