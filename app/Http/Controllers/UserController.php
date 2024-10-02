<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    public function edit($id)
    {
        $user = User::find($id);
        if ($user) {
            return view('back.dashboard.pages.edit_user', compact('user'));
        }
    }

    public function allUsers()
    {
        $users = User::all();
        return view('back.dashboard.pages.all_users', compact('users'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'nullable',
        ]);

        $user = User::find($id);

        if ($user) {
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->save();

            return redirect()->route('dashboard.alluser');
            Alert::success('Success', 'User update successfully');
        }

        return redirect()->route('dashboard.alluser');
    }

    // Delete user function
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('dashboard.alluser')->with('success', 'User deleted successfully.');
        }

        return redirect()->route('dashboard.alluser')->with('error', 'User not found.');
    }
}
