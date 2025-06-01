<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class pageController extends Controller
{
    public function register(){
        return view('customers.customer_register');
    }

    public function registerCustomer(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required|string|max:20',
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
            return view('customers.create');
        }
    
        
        
    }       
        
?>