<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;







class RegisterController extends Controller
{
    public function login()
    {
        return view('front.pages.login');
    }

    public function register()
    {
        return view('front.pages.register');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            if (Auth::user()->is_admin == 1) {

                Alert::success('Success', 'Admin Login Successfully');

                return redirect()->route('admin');
            } else {

                Alert::success('Success', 'user Login Successfully');

                return redirect()->route('dashboard');
            }
        } else {
            return redirect()->back();
        }
    }


    public function customerCreate(Request $request)
    {

        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ];

        Alert::success('Success', 'Create Acount Successfully');

        User::create($user);


        return redirect()->route('login');
    }

    public function alluser()
    {
        $users = User::all();

        return view('back.dashboard.pages.all_user', compact('users'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
