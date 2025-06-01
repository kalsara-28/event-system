<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customers.customer_register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required|string|max:10',
            'password' => 'required|confirmed|min:6',
        ]);

        Customer::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('customers.login');
    }
    public function home()
    {
        return redirect()->route('home');
    }
    
    public function showRegisterForm()
    {
        return view('customers.customer_register');
    }
}
