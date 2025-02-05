<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ImageProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.products.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "main_image" => "required|image|mimes:jpeg,png,jpg,gif|max:5120",
            "images.*" => "required|image|mimes:jpeg,png,jpg,gif|max:5120",
            "title" => "required|string|min:2|max:255",
            "content" => "required|string|min:2|max:1000",
            "price" => "required|integer",
            "off" => "nullable|integer",
            "stock" => "required|integer"
        ]);

        $product = Product::create([
            "title" => $request->title,
            "content" => $request->content,
            "price" => $request->price,
            "off" => $request->off ?? $request->off,
            "stock" => $request->stock,
            "admin_id" => Auth::guard("admin")->user()->id,
        ]);

        $mainImagePath = $request->file('main_image')->store('main_image', 'public');

        $imagePaths = [];
        if ($request->hasFile('images')) foreach ($request->file('images') as $image) $imagePaths[] = $image->store('images', 'public');
    
        $imageRecord = ImageProduct::create([
            'main_image' => $mainImagePath,
            'images' => json_encode($imagePaths),
        ]);
    
        $product->imageProducts()->attach($imageRecord->id);

        return redirect()->route("dashboard");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view("dashboard.products.edit", compact("product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "main_image" => "nullable|image|mimes:jpeg,png,jpg,gif|max:5120",
            "images.*" => "nullable|image|mimes:jpeg,png,jpg,gif|max:5120",
            "title" => "required|string|min:2|max:255",
            "content" => "required|string|min:2|max:1000",
            "price" => "required|integer",
            "off" => "nullable|integer",
            "stock" => "required|integer"
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            "title" => $request->title,
            "content" => $request->content,
            "price" => $request->price,
            "off" => $request->off ?? $request->off,
            "stock" => $request->stock
        ]);

        if ($request->hasFile("main_image")) {
            if ($product->imageProducts->isNotEmpty()) {
                $oldImage = $product->imageProducts->first()->main_image;
                if ($oldImage && Storage::disk("public")->exists($oldImage)) Storage::disk("public")->delete($oldImage);
            };

            $mainImagePath = $request->file('main_image')->store('main_image', 'public');
            $product->imageProducts()->update(['main_image' => $mainImagePath]);
        };

        if ($request->hasFile("images")) {
            $imagePaths = [];
            foreach ($request->file("images") as $image) $imagePaths[] = $image->store("images", "public");

            if ($product->imageProducts->isNotEmpty()) {
                $oldImages = json_decode($product->imageProducts->first()->images, true) ?? [];
                foreach ($oldImages as $oldImage) if (Storage::disk("public")->exists($oldImage)) Storage::disk("public")->delete($oldImage);
            };

            $product->imageProducts()->update(['images' => json_encode($imagePaths)]);
        };

        return redirect()->route("dashboard");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        if ($product->imageProducts->isNotEmpty()) {
            $imageProduct = $product->imageProducts->first();
    
            if ($imageProduct->main_image && Storage::disk("public")->exists($imageProduct->main_image)) Storage::disk("public")->delete($imageProduct->main_image);

            $imagePaths = json_decode($imageProduct->images, true) ?? [];
            foreach ($imagePaths as $image) if (Storage::disk("public")->exists($image)) Storage::disk("public")->delete($image);
    
            $imageProduct->delete();
        };

        $product->delete();

        return redirect()->back();
    }
}
