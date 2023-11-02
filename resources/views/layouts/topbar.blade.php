<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASD</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Smaken Store</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">FAQ</a>
              </li>
            </ul>
          </div>
          <div class="collapse navbar-collapse" >
            <div>
                <button>Sign in</button>
            </div>
            <div>
                <button>Log in</button>
            </div>
          </div>
        </div>
      </nav>
{{-- CONTENT --}}
      @yield('content')
{{-- CONTENT --}}
  </body>
</html>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

