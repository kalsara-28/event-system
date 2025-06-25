@extends('app')
<title>Event Details</title>
<link rel="stylesheet" href="/bootstrap-5.3.5-dist/css/bootstrap.css">
<link rel="stylesheet" href="{{ asset('CSS/Event Details.css') }}">
@section('content')
<body>
    <div class="nav">
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand">
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
<div class="overlay">
    <div class="event-container">
    <div class="content-wrap">
        @if ($type === 'wedding')
            <div class="card">
            <h2>Wedding Planning {{ $type }}</h2>
            <p><strong>Price:</strong> Rs. 250,000</p>
            <p>We create magical weddings tailored to your style.</p>
            <img src="{{ asset('Pictures/wed.jpg') }}" alt="Wedding" width="450" height="250" class="event-image" >
            <ul class="heart-list">
                <li>Venue booking & decoration</li>
                <li>Photography and videography</li>
                <li>Live music & entertainment</li>
                <li>Food and beverages catering</li>
                <li> Invitation Cards & Souvenirs</li>
                <li> Event Planning & Coordination</li>
                <li> Legal Services</li>
            </ul>
            <a href="{{ route('packages.select', ['id' => $event->id]) }}" class="btn btn-primary">Book Now</a>
            </div>
        @elseif ($type === 'birthday')
        <div class="card">
            <h2>Birthday Party {{ $type }}</h2>
            <p><strong>Price:</strong> Rs. 80,000</p>
            <p>Celebrate your birthday with fun, joy, and surprises.</p>
            <img src="{{ asset('Pictures/birth7.jpg') }}" alt="Birthday" width="450" height="250" class="event-image" >
            <ul class="heart-list">
                <li>Balloon decoration & theme setup (cartoon themes, color themes)</li>
                <li>Customized birthday cake</li>
                <li>Candy & snack stations</li>
                <li>Photographer & videographer</li>
                <li>Kids' games & activities</li>
            </ul>
            <a href="{{ route('packages.select', ['id' => $event->id]) }}" class="btn btn-primary">Book Now</a>
        </div>
        @elseif ($type === 'engagement')
        <div class="card">
            <h2>Engagement Party {{ $type }}</h2>
            <p><strong>Price:</strong> Rs. 120,000</p>
            <p>Celebrate your special moment of commitment with elegance and charm.</p>
            <img src="{{ asset('Pictures/eng4.jpg') }}" alt="Engagement" width="450" height="250" class="event-image" >
            <ul class="heart-list">
                <li>Elegant venue decoration with floral themes</li>
                <li>Engagement stage setup with backdrop</li>
                <li>Ring ceremony coordination</li>
                <li>Lighting design (fairy lights, candles)</li>
                <li>Welcome board & name signage</li>
                <li>Professional photography & videography</li>
                <li>Cake cutting ceremony arrangements</li>
            </ul>
            <a href="{{ route('packages.select', ['id' => $event->id]) }}" class="btn btn-primary">Book Now</a>
        </div>
        @elseif ($type === 'proposal')
        <div class="card">
            <h2>Proposal Planning {{ $type }}</h2>
            <p><strong>Price:</strong> Rs. 100,000</p>
            <p>We help you create the most romantic proposal moment.</p>
            <img src="{{ asset('Pictures/marry3.jpg') }}" alt="Proposal" width="450" height="250" class="event-image" >
            <ul class="heart-list">
                <li>Location setup with lights & flowers</li>
                <li>Personalized proposal ideas & scripts</li>
                <li>Romantic venue setup (beach, rooftop, etc.)</li>
                <li>Candlelight dinner setup</li>
                <li>“Marry Me” signage or light-up letters</li>
                <li>Photography package</li>
                <li>Live music optional</li>
            </ul>
            <a href="{{ route('packages.select') }}" class="btn btn-primary">Book Now</a>
        </div>
        @elseif ($type === 'gender-reveal')
        <div class="card">
            <h2>Gender Reveal Party {{ $type }}</h2>
            <p><strong>Price:</strong> Rs. 60,000</p>
            <p>Celebrate with colors, balloons and surprises!</p>
            <img src="{{ asset('Pictures/gen4.jpg') }}" alt="Gender Reveal" width="450" height="250" class="event-image" >
            <ul class="heart-list">
                <li>Themed decorations</li>
                <li>Custom reveal ideas</li>
                <li>Mom & dad chairs + decor</li>
                <li>Personalized cake & cupcakes</li>
                <li>Games: “Guess the gender” & team voting</li>
                <li>Snacks and desserts</li>
            </ul>
            <a href="{{ route('packages.select') }}" class="btn btn-primary">Book Now</a>
        </div>
        @elseif ($type === 'bride-to-be')
        <div class="card">
            <h2>Bride To Be Party {{ $type }}</h2>
            <p><strong>Price:</strong> Rs. 70,000</p>
            <p>Make her feel special before her big day.</p>
            <img src="{{ asset('Pictures/brideto3.jpg') }}" alt="Bride To Be" width="450" height="250" class="event-image" >
            <ul class="heart-list">
                <li>Decorations and props</li>
                <li>Bride’s throne chair setup</li>
                <li>Bridal cake and drinks</li>
                <li>Dessert table & drinks station</li>
                <li>Bride tribe photoshoot corner</li>
                <li>Custom games (truth/dare, who knows the bride best?)</li>
                <li>Music & dance floor area</li>
            </ul>
            <a href="{{ route('packages.select') }}" class="btn btn-primary">Book Now</a>
        </div>
        @else
            <h2>Service Not Found</h2>
        @endif
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
