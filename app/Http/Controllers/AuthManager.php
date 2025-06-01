<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User; 

class AuthManager extends Controller
{
    // Show login page
    function login()
    {
        return view('customers.login');
    }

    // Show customer register page
    function customer_register()
    {
        return view('customers.create');
    }

    function loginPost(Request $request)
    {
        $request->validate([
           'email' => 'required|email',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home')); // ✅ corrected here
        }

        return redirect(route('customers.login'))->with('error', 'Login details are not valid');
    }

    // Handle customer register form POST
    function customer_registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phonenumber' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'password' => Hash::make($request->password),
        ]);

        if (!$user) {
            return redirect(route('customers.create'))->with('error', 'Registration failed, try again.');
        }

        return redirect(route('customers.login'))->with('success', 'Registration successful. Please login to access the app.');
    }

    // Logout function
    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('customers.login'));
    }
}
