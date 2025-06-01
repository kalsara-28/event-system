<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link rel="stylesheet" href="/bootstrap-5.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('CSS/gallery.css') }}">
</head>
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

    <section class="gallery-section">
        <h1>Event Highlights</h1>
        <div class="gallery-grid">
            <img src="{{ asset('Pictures/wedi1.jpg') }}" alt="Album 1">
            <img src="{{ asset('Pictures/marry2.jpg') }}" alt="Album 2">
            <img src="{{ asset('Pictures/eng9.jpg') }}" alt="Album 3">
            <img src="{{ asset('Pictures/birth2.jpg') }}" alt="Album 4">
            <img src="{{ asset('Pictures/brideto4.jpg') }}" alt="Album 5">
            <img src="{{ asset('Pictures/gen1.jpg') }}" alt="Album 6">
            <img src="{{ asset('Pictures/eng10.jpg') }}" alt="Album 7">
            <img src="{{ asset('Pictures/gen10.jpg') }}" alt="Album 8">
            <img src="{{ asset('Pictures/wedi9.jpg') }}" alt="Album 8">
            <img src="{{ asset('Pictures/birth4.jpg') }}" alt="Album 8">
            <img src="{{ asset('Pictures/marry5.jpg') }}" alt="Album 8">
            <img src="{{ asset('Pictures/brideto3.jpg') }}" alt="Album 8">
            <img src="{{ asset('Pictures/wedi5.jpg') }}" alt="Album 8">
            <img src="{{ asset('Pictures/marry8.jpg') }}" alt="Album 8">
            <img src="{{ asset('Pictures/birth3.jpg') }}" alt="Album 8">
            <img src="{{ asset('Pictures/eng4.jpg') }}" alt="Album 8">
        </div>
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
</body>
</html>
