<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\validation\ValidationException;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        try {
            Auth::guard("web")->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return response()->json([
                "success" => true,
                "message" => "You have successfully logged out.",
                "status" => "bg-blue-color"
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                "success" => false,
                "errors" => $e->errors(),
                "status" => "bg-error-color"
            ]);
        };
    }
}
