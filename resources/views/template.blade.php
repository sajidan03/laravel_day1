<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: var(--color-main);">
        <div class="container">
            <img src="{{ asset('assets/pngtree-the-online-shop-logo-uses-a-colorful-house-concept-png-image_3096020-removebg-preview.png')}}" alt=""  style="width:36px; margin-right: 10px;" class="rounded-pill" class="navbar-brand">
          <a class="navbar-brand" href="#">
            JByte
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
            <li class="nav-item">
                  <a class="nav-link" href="{{ route('produk') }}">Keranjang</a>
                </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Help</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">Produk</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Link 1</a></li>
                  <li><a class="dropdown-item" href="#">Link 2</a></li>
                  <li><a class="dropdown-item" href="#">Link 3</a></li>
                </ul>
              </li>
            </ul>
        </div>
        <form class="d-flex">
          <input class="form-control me-2" type="text" placeholder="Search">
          <button class="btn btn-primary bg-success" type="button">Search</button>
        </form>
        </div>
      </nav>
    </nav>
    @yield('content')
</body>
</html>
<script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
