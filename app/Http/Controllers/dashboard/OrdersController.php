<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Ramsey\Uuid\Codec\OrderedTimeCodec;

class OrdersController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::findOrFail($id);

        return view("dashboard.orders.edit", compact("order"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "first_name" => "required|string|min:2|max:200",
            "last_name" => "required|string|min:2|max:200",
            "email" => "required|email|unique:orders,email," . $id,
            "address" => "required|string|min:2",
            "phone" => "required|string|min:2|max:200",
            "other_notes" => "nullable|string|min:2|max:1000"
        ]);

        $order = Order::findOrFail($id);

        $order->update([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "address" => $request->address,
            "phone" => $request->phone,
            "other_notes" => $request->other_notes ?? "no other notes",
            "status" => $request->status
        ]);

        return redirect()->route("dashboard");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);

        $order->delete();

        return redirect()->back();
    }
}
