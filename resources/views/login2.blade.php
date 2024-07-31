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
  <body style="background-color: rgb(246, 229, 178)">
    {{-- CONTENT --}}
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 rounded-3" style="background-color: rgb(203, 165, 115)">
                    
                    <div class="text-center mb-4">
                        <h2 class="mb-3">Login Smaken Store</h2>
                        {{-- <p>Login sebagai <b>User/Masyarakat</b></p> --}}
                    </div>
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
                    <form action="" method="POST">
                      @csrf
                      <div class="form-outline mb-3">
                        <label class="form-label" for="email">E-mail</label>
                        <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="johnDoe@gmail.com"/>
                      </div>
                      <div class="form-outline mb-4">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password"/>
                      </div>

                      <div class="d-flex">
                          <button class="btn btn-primary flex-fill" type="submit">Login</button>
                      </div>
                    </form>
                  <hr>
                <div class="d-flex flex-column">
                    <a class="btn btn-success flex-fill" href="{{ route('register') }}">Ingin Bergabung? Daftar Sekarang</a>
                </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


    {{-- CONTENT --}}
      <footer class=" align-self-end bg-primary p-5">

      </footer>
  </body>
  
</html>

