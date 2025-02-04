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
        Auth::guard("admin")->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route("auth.admin.login");
    }
}
