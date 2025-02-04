<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function orderStore($id)
    {
        $product = Product::findOrFail($id);
    
        $order = Order::create(['user_id' => Auth::user()->id]);
        
        $order->products()->attach($product->id);
        
        return redirect()->back();
    }

    public function orderDestroy($product_id)
    {
        $order = Order::where("user_id", Auth::id())->first();
    
        if (!$order) return redirect()->back()->withErrors('No active order found.');
    
        $order->products()->detach($product_id);
        
        if ($order->products()->count() == 0) $order->delete();
    
        return redirect()->back();
    }
}