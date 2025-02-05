<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    public function index()
    {
        $products = Product::orderBy("created_at", "desc")->paginate(30);
        
        return view("index", compact("products"));
    }
}
