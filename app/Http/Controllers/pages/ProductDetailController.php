<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class ProductDetailController extends Controller
{
    public function productDetail($id)
    {
        $product = Product::findOrFail($id);

        return view("pages.product-details", compact("product"));
    }

    public function addToCart(Request $request, $id)
    {
        $request->validate([
            "quantity" => "required|integer|min:1|max:1000"
        ]);
    
        $product = Product::findOrFail($id);
    
        $quantity = $request->quantity ?? 1;

        if ($request->quantity > $product->quantity) return redirect()->back()->withErrors("This quantity does not exist");
    
        $cartItem = Cart::where("user_id", Auth::user()->id)->where("product_id", $product->id)->first();
    
        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->total = $cartItem->quantity * $product->price;
            $cartItem->save();
        } else {
            $cartItem = new Cart();
            $cartItem->user_id = Auth::user()->id;
            $cartItem->product_id = $product->id;
            $cartItem->quantity = $quantity;
            $cartItem->total = $quantity * $product->price;
            $cartItem->save();
        };
    
        return redirect()->back();
    }    

    public function destroyCart($id)
    {
        $cart = Cart::findOrFail($id);

        $cart->delete();

        return redirect()->back();
    }
}
