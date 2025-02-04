<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $admins = Admin::orderBy("created_at", "desc")->get();
        $users = User::orderBy("created_at", "desc")->get();
        $orders = Order::orderBy("created_at", "desc")->get();
        $products = Product::orderBy("created_at", "desc")->get();
    
        return view("dashboard.dashboard", compact("admins", "users", "orders", "products"));
    }
}
