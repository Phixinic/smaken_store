<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASD</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/topbar.css') }}">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light shadow fixed-top">
        <div class="container-fluid">
          <div>
            <img src="{{ asset('assets/img/smkn1lmj.png') }}" class="ms-5  justify-content-start" alt="">
          <a class="navbar-brand" href="#">Smaken Store</a>
          </div>
          
          {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> --}}


          <div class="d-flex justify-content-center " id="navbarNav">
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

          <div class="d-flex justify-content-end" >
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

