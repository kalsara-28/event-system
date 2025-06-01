<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>main</title>
    <link rel="stylesheet" href="/bootstrap-5.3.5-dist/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('CSS/main.css')}}">
</head>
<body>
    <body>

   
    <div class="top-right">
        <a href="{{ route('customers.login') }}" class="btn btn-login px-4 py-2 rounded-pill">Login</a>
    </div>

    
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="overlay text-center">
            <h1 class="display-4 fw-bold">Welcome to Evenra Magical Events</h1>
            <p class="lead">Experience the magic of perfect event planning!</p>
            <a href="{{ route('customers.create') }}" class="btn btn-light mt-3 px-4 py-2 rounded-pill">Register</a>
        </div>
    </div>

</body>

</body>
</html>
