@extends('app')
<head>
    <title>Booking</title>
    <link rel="stylesheet" href="/bootstrap-5.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('CSS/booking.css') }}">
</head>
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
<div class="container mt-4">
    <form action="{{ route('booking.store') }}" method="POST">
        @csrf
        <h3>Book Now</h3>
        <input type="text" name="name" placeholder="Your Name" class="form-control mb-2" required><br>
        <input type="email" name="email" placeholder="Email" class="form-control mb-2" required><br>
        <input type="text" name="phone" placeholder="Phone Number" class="form-control mb-2" required><br>
        <input type="date" name="event_date" class="form-control mb-2" required><br>
        <select name="package" class="form-control mb-2" required>
        <option value="">-- Select a Package --</option>
        <option value="Silver Package">Half Package 15%</option>
        <option value="Gold Package">Full Package 20%</option>
        <option value="Platinum Package">Day Package 10%</option>
                </select><br> 
        <textarea name="message" rows="4" placeholder="Additional details..." class="form-control mb-3"></textarea><br>
        <a href="{{ route('payment.show') }}" class="btn btn-success" style="background-color: #c102f1; color: white">Booking</a>
        <button type="reset" class="btn" style="background-color: #c102f1; color: white;">Clear</button>
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
</div>
@endsection
