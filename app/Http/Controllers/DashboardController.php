<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Ensure this path is correct
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function dashboard()
    // {
    //     // Fetch current user
    //     $user = Auth::user();

    //     return view('back.dashboard.dashboard', compact('user'));
    // }

    public function allUsers()
    {
        $users = User::all();
        return view('back.dashboard.pages.all_users', compact('users'));
    }

    public function showDashboard()
    {

        $user = Auth::user();

        return view('back.dashboard.dashboard', compact('user'));
        return redirect()->route('dashboard');
    }
}
