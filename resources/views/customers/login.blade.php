@extends('app')
@push('title')
<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('CSS/login.css') }}">
</head>
    @section('content')
    <div class="container">
            <div class="row">
                <div class="container d-flex justify-content-center align-items-center vh-100">
                    <div class="card p-4 shadow" style="width: 400px;">
                        <h4 class="text-center mb-4">Customer Login</h4>
            
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @endif
            
                    <form method="POST" action="{{ route('customers.login') }}">
                        @csrf
            
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required autofocus>
                        </div>
            
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
                        </div>
                        <div class="mb-3 text-end">
                            <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
            
        
    @endsection

@endpush