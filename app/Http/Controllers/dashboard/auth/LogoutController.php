<?php

namespace App\Http\Controllers\dashboard\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        try {
            Auth::guard("admin")->logout();

            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return response()->json(["success" => true]);
        } catch (ValidationException $e) {
            return response()->json(["success" => false]);
        }
    }
}
