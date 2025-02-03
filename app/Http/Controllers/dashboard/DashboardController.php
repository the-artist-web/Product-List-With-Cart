<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $admins = Admin::orderBy("created_at", "desc")->get();
        $users = User::orderBy("created_at", "desc")->get();
    
        return view("dashboard.dashboard", compact("admins", "users"));
    }
}
