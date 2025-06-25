@extends('app')
<head>
    <title>Our Service</title>
    <link rel="stylesheet" href="/bootstrap-5.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('CSS/services.css') }}">
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
<div class="text-center p-5">
    <h1 class="our">Our Services</h1>
    <p class="lead">We provide magical and memorable event planning services tailored just for you!</p>

    <div class="row mt-5">
    <div class="row g-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('Pictures/wed1.jpg') }}" class="card-img-top" alt="Weddings">
                    <div class="card-body">
                        <h5 class="card-title">Weddings</h5>
                        <p class="card-text">From romantic setups to themed celebrations, we make your dream wedding a reality.</p>
                        <a href="{{ route('service.details', ['type' => 'wedding']) }}">
                        <button class="get-now-btn">View</button>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('Pictures/bd2.jpg') }}" class="card-img-top" alt="Birthday Parties">
                    <div class="card-body">
                        <h5 class="card-title">Birthday Parties</h5>
                        <p class="card-text">Fun, colorful, and unforgettable birthday events for all ages!</p>
                        <a href="{{ route('service.details', ['type' => 'birthday']) }}">
                        <button class="get-now-btn">View</button>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('Pictures/wedding.avif') }}" class="card-img-top" alt="Engagement parties">
                    <div class="card-body">
                        <h5 class="card-title">Engagement parties</h5>
                        <p class="card-text">Professional setups, brand styling, and complete coordination for your corporate needs.</p>
                        <a href="{{ route('service.details', ['type' => 'engagement']) }}">
                        <button class="get-now-btn">View</button>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('Pictures/marry1.jpg') }}" class="card-img-top" alt="Proposal Planning">
                    <div class="card-body">
                        <h5 class="card-title">Proposal Planning</h5>
                        <p class="card-text">We are committed to delivering a flawless proposal that exceeds your expectations. We'll work tirelessly to ensure that everything runs smoothly.</p>
                        <a href="{{ route('service.details', ['type' => 'proposal']) }}">
                        <button class="get-now-btn">View</button>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('Pictures/gender1.jpg') }}" class="card-img-top" alt="Gender Revel Parties">
                    <div class="card-body">
                        <h5 class="card-title">Gender Revel Parties</h5>
                        <p class="card-text">We will surprise you with your gender revel party in a grand manner</p>
                        <a href="{{ route('service.details', ['type' => 'gender-reveal']) }}">
                        <button class="get-now-btn">View</button>
                    </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('Pictures/bride1.webp') }}" class="card-img-top" alt="Bride to be parties">
                    <div class="card-body">
                        <h5 class="card-title">Bride to be parties</h5>
                        <p class="card-text">We will organize your bright to be party to surprise you.</p>
                        <a href="{{ route('service.details', ['type' => 'bride-to-be']) }}">
                        <button class="get-now-btn">View</button>
                    </a>
                    </div>
                </div>
            </div>
    </div>
</div>
<footer class="bg-dark text-white pt-4 pb-2 mt-5">
<div class="foot">
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
                    <li><a href="{{ route('about_us') }}" class="text-white text-decoration-none">About Us</a></li>
                    <li><a href="{{ route('service') }}" class="text-white text-decoration-none">Our Service</a></li>
                    <li><a href="{{ route('packages') }}" class="text-white text-decoration-none">Packages</a></li>
                    <li><a href="{{ route('gallery') }}" class="text-white text-decoration-none">Gallery</a></li>
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
</div>
</footer>
</body>
@endsection
