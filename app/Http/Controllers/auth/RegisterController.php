<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\validation\ValidationException;

class RegisterController extends Controller
{
    public function viewRegister()
    {
        return view("auth.register");
    }

    public function loginStore(Request $request)
    {
        try {
            $request->validate([
                "name" => "required|string|min:2|max:100",
                "email" => "required|email|unique:users,email",
                "password" => "required|string|min:8|max:30|confirmed",
            ]);
    
            $user = User::create([
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password),
            ]);
    
            Auth::guard("web")->login($user);

            return response()->json(["success" => true, "message" => "Active registration completed!"]);
        } catch (ValidationException $e) {
            return response()->json([
                "success" => false,
                "errors" => $e->errors()
            ]);
        };
    }
}
