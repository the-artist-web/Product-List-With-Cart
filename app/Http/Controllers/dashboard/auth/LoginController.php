<?php

namespace App\Http\Controllers\dashboard\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function viewLogin()
    {
        return view("dashboard.auth.login");
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|string|min:8|max:30"
        ]);

        if (Auth::guard("admin")->attempt(["email" => $request->email, "password" => $request->password])) {
            return redirect()->route("dashboard");
        };

        return redirect()->back();
    }
}
