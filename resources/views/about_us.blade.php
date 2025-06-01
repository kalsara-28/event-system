@extends('app')
@push('title')
<head>
    <title>About Us</title>
    <link rel="stylesheet" href="/bootstrap-5.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('CSS/about_us.css') }}">
</head>
@endpush
@section('content')
<body>
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
                        <a class="nav-link active" href="{{ route('service') }}">Our Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('packages') }}">Packages</a>
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
    <section class="about-section">
        <h1>About Evenra</h1>
        <p>
            Evenra is a magical events management system designed to make your celebrations extraordinary.
            From weddings to corporate galas, we bring a touch of wonder to every moment.
        </p>
        <p>
            Our passionate team is dedicated to delivering unforgettable experiences, blending creativity,
            technology, and precision planning. With Evenra, every event is a magical memory in the making.
        </p>
        <p>
            Join us on our journey as we redefine event management with elegance, charm, and a sprinkle of enchantment.
        </p>
    </section>
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
</footer>
</body>
@endsection
