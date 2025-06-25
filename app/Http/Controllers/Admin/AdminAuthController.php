<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Try to find the admin user
        $admin = Admin::where('email', $request->email)->first();

        // Check password
        if ($admin && Hash::check($request->password, $admin->password)) {
            // Make sure session starts properly
            session()->regenerate();
            session(['admin_id' => $admin->id]);

            return redirect()->route('admin.dashboard');
        }

        // Return with error
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function dashboard()
    {
        if (!session('admin_id')) {
            return redirect()->route('admin.login');
        }

        return view('admin.dashboard');
    }

    public function logout()
    {
        session()->forget('admin_id');
        return redirect()->route('admin.login');
    }
}
