<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Database\Eloquent\HigherOrderBuilderProxy;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $carts = Cart::with("product")->where("user_id", Auth::user()->id)->orderBy("created_at", "desc")->get();

        return view("pages.checkout", compact("carts"));
    }

    public function checkoutStore(Request $request)
    {
        $request->validate([
            "first_name" => "required|string|min:2|max:200",
            "last_name" => "required|string|min:2|max:200",
            "email" => "required|email|unique:orders,email",
            "address" => "required|string|min:2",
            "phone" => "required|string|min:2|max:200",
            "other_notes" => "nullable|string|min:2|max:1000"
        ]);

        $carts = Cart::with("product")->where("user_id", Auth::user()->id)->get();

        $order = Order::create([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "address" => $request->address,
            "phone" => $request->phone,
            "other_notes" => $request->other_notes ?? "no other notes",
            "quantity" => $carts->sum("quantity"),
            "total" => $carts->sum("total"),
            "status" => "pending",
            "user_id" => Auth::user()->id
        ]);

        foreach ($carts as $cart) {
            OrderItems::create([
                "order_id" => $order->id,
                "product_id" => $cart->product_id,
                "quantity" => $cart->quantity,
                "total" => $cart->total
            ]);
    
            $cart->product->decrement('quantity', $cart->quantity);
        };
    
        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route("index")->with("success", "The request has been completed successfully!");
    }
}
