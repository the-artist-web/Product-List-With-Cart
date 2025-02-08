<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function settings($id)
    {
        $user = User::findOrFail($id);

        return view("pages.settings", compact("user"));
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            "profile_photo" => "nullable|image|mimes:jpeg,png,jpg,gif|max:5120",
            "name" => "required|string|min:2|max:100",
            "username" => "required|string|min:2|max:255",
            "email" => "required|email|unique:users,email," . $id,
            "bio" => "required|string|min:2|max:255"
        ]);

        $user = User::findOrFail($id);

        if ($request->hasFile("profile_photo")) {
            if ($user->profile_photo && Storage::disk('public')->exists($user->profile_photo)) Storage::disk('public')->delete($user->profile_photo);
    
            $imagePath = $request->file("profile_photo")->store("profile_photo", "public");
        } else {
            $imagePath = $user->profile_photo;
        };

        $user->update([
            "profile_photo" => $imagePath,
            "name" => $request->name,
            "username" => $request->username,
            "email" => $request->email,
            "bio" => $request->bio
        ]);

        return redirect()->back();
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        if (!Hash::check($request->old_password, Auth::user()->password)) return back()->withErrors(["The old password is incorrect."]);

        $user = User::findOrfail($id);

        $user->update([
            "password" => Hash::make($request->new_password)
        ]);

        return back()->with('success', 'Password updated successfully.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if ($user->profile_photo && Storage::disk('public')->exists($user->profile_photo)) Storage::disk('public')->delete($user->profile_photo);

        $user->delete();

        return redirect()->route("auth.login");
    }
}
