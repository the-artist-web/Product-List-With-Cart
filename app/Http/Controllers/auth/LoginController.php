<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\validation\ValidationException;

class LoginController extends Controller
{
    public function viewLogin()
    {
        return view("auth.login");
    }

    public function loginStore(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required|string|min:8|max:30"
        ]);

        if (Auth::guard("web")->attempt(["email" => $request->email, "password" => $request->password])) {
            session()->regenerate();
            return redirect()->route("index");
        };

        return redirect()->back();
    }
}
