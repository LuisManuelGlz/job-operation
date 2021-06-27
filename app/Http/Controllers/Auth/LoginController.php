<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function store(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        Auth::attempt($request->only('email', 'password'));

        $user_id = Auth::user()->id;
        $profile = Profile::where('user_id', $user_id)->first();

        if ($profile) {
            return redirect()->route('profiles.index');
        }

        return redirect()->route('profiles.create');
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('login');
    }
}
