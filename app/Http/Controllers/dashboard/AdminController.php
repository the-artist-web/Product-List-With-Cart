<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.admins.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                "name" => "required|string|min:2|max:100",
                "email" => "required|email|unique:admins,email",
                "password" => "required|string|min:8|max:30|confirmed",
                "role" => "required|string|in:super_admin,admin"
            ]);

            Admin::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password),
                "role" => $request->role,
            ]);

            return response()->json([
                "success" => true,
                "message" => "Administrator added successfully"
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                "success" => false,
                "errors" => $e->errors()
            ]);
        };
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = Admin::findOrFail($id);

        return view("dashboard.admins.edit", compact("admin"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::findOrFail($id);

        $admin->delete();

        return response()->json([
            "success" => true,
            "message" => "Admin deleted successfully"
        ]);
    }
}
