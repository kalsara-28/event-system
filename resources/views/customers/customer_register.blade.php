@extends('app')
@push('title')
<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('CSS/register.css') }}">
</head>
@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="container d-flex justify-content-center align-items-center vh-100">
                <div class="col-md-5">
                    <div class="card p-4 shadow-lg rounded-4">
                        <div class="card-body">
                            <h2 class="mb-4 text-center">Customer Register</h2>
    
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
    
                        <form method="POST" action="{{ route('customers.store') }}">
                            @csrf
    
                            <div class="mb-3">

                                <label for="fullname" class="form-label">Full Name</label>
                                <input type="text" name="full_name" id="full_name" class="form-control" required autofocus>
                            </div>
    
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="phonenumber" class="form-label">Phone Number</label>
                                <input type="number" name="phone" id="phone" class="form-control" required>
                            </div>
    
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
    
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                            </div>
    
                            <button type="submit" class="btn btn-success w-100">Register</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="{{ route('customers.login') }}">Already have an account? Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </div> 
@endsection
