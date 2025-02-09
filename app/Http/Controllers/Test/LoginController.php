<?php

namespace App\Http\Controllers\Test;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //login
    public function login()
    {
        return view('tests.Auth.login');
    }

    //store
    public function store(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        $fields = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if (!Auth::attempt($fields)) {
            return back()->withErrors([
                'email' => 'your provided crenditial is wrong!'
            ]);
        }

        Auth::login($user);
        return to_route('home.index')->with('success', 'Login Success!');
    }

    // logout
    public function logout()
    {
        Auth::logout();
        return to_route('login');

    }


}
