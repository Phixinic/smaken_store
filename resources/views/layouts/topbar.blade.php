<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASD</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/topbar.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light shadow fixed-top">
        <div class="container-fluid d-flex justify-content-between">
          <div>
            <img src="{{ asset('assets/img/smkn1lmj.png') }}" class="ms-5 logo" alt="">
          <a class="navbar-brand" href="#">Smaken Store</a>
          </div>
          
          <button class="navbar-toggler order-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>


          <div class="collapse navbar-collapse order-1" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item px-3">
                <a class="nav-link active" href="#">Home</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link" href="#">FAQ</a>
              </li>
            </ul>
          </div>

          <div class="d-flex order-2" >
            <div class="mx-2">
                <button class="btn btn-outline-primary rounded-0 py-2 px-4">Sign up</button>
            </div>
            <div>
                <button class="btn btn-primary rounded-0 py-2 px-4">Sign in</button>
            </div>
          </div>

        </div>
      </nav>
{{-- CONTENT --}}

  @yield('content')

{{-- CONTENT --}}
      <footer class=" align-self-end bg-primary p-5">

      </footer>
  </body>
</html>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

