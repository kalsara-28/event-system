@extends('app')
<head>
<title>Packages</title>
<link rel="stylesheet" href="/bootstrap-5.3.5-dist/css/bootstrap.css">
<link rel="stylesheet" href="{{ asset('CSS/packages.css') }}">
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
  </div>
  <div class="package">
        <h1 class="pack">Our Event Packages</h1>
    <div class="row justify-content-center">
      <div class="row g-4">   
          <div class="col-md-4">
              <div class="card bg-light mb-3 shadow">
                      <img src="{{ asset('/Pictures/bd1.webp') }}" class="card-img-top" alt="Half Package">
                      <div class="card-body text-center">
                        <div class="badge-custom">HALF PACKAGE</div>
                        <div class="discount-text">15% Discount</div>
                        <p class="text-muted">Our Half Package is designed for clients who need support at any stage of their special event planning. Whether it's choosing the perfect venue, finalizing the theme, coordinating vendors, or last-minute arrangements, Evenra steps in to make your dream celebration come true effortlessly and elegantly.</p>
                        <div class="booking-text">Booking Now Open</div>
                        <button class="get-now-btn">Get Now</button>
                      </div>
                </div>
          </div>
  
                  <!-- Full Package -->
                  <div class="col-md-4">
                    <div class="card bg-light mb-3 shadow">
                      <img src="{{ asset('/Pictures/deco.jpeg') }}" class="card-img-top" alt="Full Package">
                      <div class="card-body text-center">
                        <div class="badge-custom">FULL PACKAGE</div>
                        <div class="discount-text">20% Discount</div>
                        <p class="text-muted">With our Full Package, we take care of your entire event from start to finish. From the very first planning meeting to the final sparkle of your magical day, Evenra ensures every moment is meticulously curated and beautifully executed.</p>
                        <div class="booking-text">Booking Now Open</div>
                        <button class="get-now-btn">Get Now</button>
                      </div>
                    </div>
                  </div>
  
              <!-- Day Package -->
              <div class="col-md-4">
                <div class="card bg-light mb-3 shadow">
                  <img src="{{ asset('/Pictures/bride.jpeg') }}" class="card-img-top" alt="Day Package">
                  <div class="card-body text-center">
                    <div class="badge-custom">DAY PACKAGE</div>
                    <div class="discount-text">10% Discount</div>
                    <p class="text-muted">Our Day Package is perfect for those who have already planned most details but need professional support on the event day. Evenra will manage coordination, timing, and troubleshooting so you can relax and enjoy every moment without worry.</p>
                    <div class="booking-text">Booking Now Open</div>
                    <button class="get-now-btn">Get Now</button>
                  </div>
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
