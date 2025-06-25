@extends('app')
<head>
<title>Payment</title>
<link rel="stylesheet" href="/bootstrap-5.3.5-dist/css/bootstrap.css">
<link rel="stylesheet" href="{{ asset('CSS/payment.css') }}">
</head>
@section('title', 'Payment')

@section('content')
<body>
    <div class="nav">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('/Pictures/logo.jpg') }}" alt="Evenra Logo" width="50" height="50" class="me-2">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('about_us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('contact') }}">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
  </nav>
  </div>
 <div class="payment-form">
        <h2>Payment</h2>

        @if(session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif

        <div class="payment-options">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b5/PayPal.svg" alt="PayPal">
            <img src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg" alt="Apple Pay">
            <img src="/Pictures/googlepay.jpg" alt="Google Pay">
        </div>

        <div class="separator"><span>or pay using credit card</span></div>

        <form action="{{ route('payment') }}" method="POST">
            @csrf
            <label>Card holder full name</label>
            <input type="text" name="full_name" placeholder="Enter your full name" required>
            <label> Payment for:</label>
            <input type="text" name="Payment_for" placeholder="Payment for" required>
            <label>Amount: Rs.</label>
            <input type="text" name="Amount" placeholder="Rs." required>

            <label>Card Number</label>
            <input type="text" name="card_number" placeholder="0000 0000 0000 0000" required>

            <div class="row">
                <div style="flex:1;">
                    <label>Expiry Date</label>
                    <input type="text" name="expiry" placeholder="01/23" required>
                </div>
                <div style="flex:1;">
                    <label>CVV</label>
                    <input type="text" name="cvv" placeholder="CVV" required>
                </div>
            </div>

            <button type="submit">Pay Now</button>
        </form>
    </div>

<footer class="bg-dark text-white pt-4 pb-2 mt-5">
    <div class="container text-center text-md-start">
        <div class="row">
            <!-- About -->
            <div class="col-md-4 mb-3">
                 <img src="{{ asset('/Pictures/logo.jpg') }}" alt="Evenra Logo" width="100" height="100" class="me-2">
                <p>We create magical events tailored to your dreams. Let us bring your vision to life with elegance and creativity.</p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 mb-3">
                <h5 class="text-uppercase">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="{{ route('gallery') }}" class="text-white text-decoration-none">About Us</a></li>
                    <li><a href="{{ route('service') }}" class="text-white text-decoration-none">Our Service</a></li>
                    <li><a href="{{ route('packages') }}" class="text-white text-decoration-none">Packages</a></li>
                    <li><a href="{{ route('about_us') }}" class="text-white text-decoration-none">Gallery</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white text-decoration-none">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 mb-3">
                <h5 class="text-uppercase">Contact</h5>
                        <p>Mr. Shan Fernando</p>
                        <p>Kandy Rd,Kiribathgoda</p>
                        <p>evenramagicalevents@gmail.com</p>
                        <p>0785812345</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-3">
        <small>&copy; {{ date('Y') }} Evenra. All rights reserved.</small>
    </div>
</footer>
@endsection