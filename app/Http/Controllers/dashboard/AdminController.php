<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        $request->validate([
            "name" => "required|string|min:2|max:100",
            "email" => "required|email|unique:admins,email",
            "bio" => "required|string|min:2|max:200",
            "password" => "required|string|min:8|max:30|confirmed",
            "role" => "required|string|in:super_admin,admin"
        ]);

        Admin::create([
            "name" => $request->name,
            "email" => $request->email,
            "bio" => $request->bio,
            "password" => Hash::make($request->password),
            "role" => $request->role,
        ]);

        return redirect()->route("dashboard");
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
        $request->validate([
            "name" => "required|string|min:2|max:100",
            "email" => "required|email|unique:admins,email," . $id,
            "bio" => "required|string|min:2|max:200",
            "old_password" => "nullable|string|min:8|max:30",
            "new_password" => "nullable|string|min:8|max:30|confirmed",
            "role" => "required|string|in:super_admin,admin"
        ]);

        $admin = Admin::findOrFail($id);

        if ($request->old_password && !Hash::check($request->old_password, $admin->password)) return back()->withErrors(["The old password is incorrect."]);

        $admin->update([
            "name" => $request->name,
            "email" => $request->email,
            "bio" => $request->bio,
            "password" => Hash::make($request->new_password),
            "role" => $request->role
        ]);

        return redirect()->route("dashboard");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::findOrFail($id);

        $admin->delete();

        return redirect()->back();
    }
}
