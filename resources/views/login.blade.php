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
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
  </head>

    <body>
        <section class="vh-100">
            <div class="container py-5 h-100">
              <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                    class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 p-3">
                    <div class="d-flex justify-content-center mb-4 flex-column">
                        <h3 class="fw-bolder">LOGIN</h3>
                        <p class="fst-italic">
                            "Ragumu Rugimu"
                        </p>
                        @if (session('status'))
                            <div class="alert alert-danger">
                                {{ session('message') }}
                            </div>    
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ( $errors->all() as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </div>    
                        @endif
                    </div>
                  <form action="" method="POST">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email address</label>
                      <input type="email" id="email" name="email" class="form-control form-control-lg" />
                    </div>
          
                    <!-- Password input -->
                    <div  class="form-outline mb-4">
                        <label class="form-label" for="password">Password</label>
                      <input  type="password" id="password" name="password"class="form-control form-control-lg" />
                    </div>
          
                    <!-- Submit button -->
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Sign in</button>
                    </div>
          
                   
                  </form>
                </div>
              </div>
            </div>
          </section>
    </body>
</html>