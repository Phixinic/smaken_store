<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smaken Store</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/topbar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
  </head>
  <body>
   
<!-- Navbar start -->
<nav class="navbar navbar-expand-lg bg-light shadow fixed-top">
<div class="container-fluid ">
  <div class="container">
      <nav class="navbar navbar-light navbar-expand-lg ">
        <img src="{{ asset('assets/img/smkn1lmj.png') }}" class="logo" alt="">
          <a href="{{ route('dashboard') }}" class="navbar-brand">
              <h3 class="text-primary fw-bold mb-0">Smaken<span class="text-dark">Store</span> </h3>
          </a>
          <button class="navbar-toggler py-2 px-3 rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav mx-auto">
                <li class="nav-item px-3">
                  <a class="nav-link {{ Request::routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link {{ Request::routeIs('faq') ? 'active' : '' }}" href="{{ route('faq') }}">FAQ</a>
                </li>
              </div>
                <div class="d-flex">
                  <a href="#" class="btn btn-primary py-2 px-4 me-3 rounded-0">Log In</a>
                  {{-- <a href="#" class="btn btn-primary py-2 px-4 rounded-0 mx-2">Sign Up</a> --}}
                </div>
          </div>
      </nav>
  </div>
</div>
</nav>
<!-- Navbar End -->
      {{-- CONTENT --}}

  @yield('content')

{{-- CONTENT --}}
      <footer class=" align-self-end bg-primary p-5">

      </footer>
  </body>
  
</html>

