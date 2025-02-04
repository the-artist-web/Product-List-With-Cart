<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::orderBy("created_at", "desc")->get();
        $order = Order::firstOrCreate(["user_id" => Auth::user()->id]);

        return view("index", compact("products", "order"));
    }
}
