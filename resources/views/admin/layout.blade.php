<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/admin-style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <h4>Admin Panel</h4>
            <a href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a href="#">Blogs & Events</a>
            <a href="#">Clients</a>
            <a href="#">Services</a>
            <a href="#">Gallery</a>
            <a href="#">User Management</a>
            <a href="#">Task Calender</a>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="btn btn-sm btn-light mt-3">Logout</button>
            </form>
        </div>

        <div class="main-content w-100">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
