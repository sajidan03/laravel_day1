<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container-fluid bg bg-dark text-white p-3">
        <div class="navbar-brand">
        <img src="{{ asset('assets/images-removebg-preview.png') }}" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
            Toko Assalamualaikum</div>
    </div>
    @yield('content')
</body>
</html>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
