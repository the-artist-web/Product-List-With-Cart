<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function productDetail($id)
    {
        $product = Product::findOrFail($id);

        return view("pages.product-details", compact("product"));
    }
}
