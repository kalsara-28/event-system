<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap-5.3.5-dist/css/bootstrap.css">
@stack('title')
    @stack('css')
</head>
<body class="min-h-screen overflow-y-auto bg-gradient-to-br from-purple-100 via-pink-100 to-yellow-100">
@yield('content')


<script src="/bootstrap-5.3.5-dist/js/bootstrap.js"></script>
@stack('script')
</body>
</html>