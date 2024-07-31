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
        <section class="" style="background-color: #eee">
            <div class="container h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                  <div class="card text-black m-5" style="border-radius: 25px;">
                    <div class="card-body p-md-5 ">
                      <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
          
                          <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                          @if (session('status'))
                          <div class="alert alert-danger">
                            {{ session('message') }}
                          </div>    
                          @endif
                          @if ($errors->any())
                          <div class="alert alert-danger">
                              @foreach ($errors->all() as $item)
                                  <li>{{ $item }}</li>
                              @endforeach
                          </div>    
                          @endif
                          <form action="" class="mx-1 mx-md-4" method="POST">
                            @csrf
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <div data-mdb-input-init class="form-outline flex-fill mb-0">
                               <label class="form-label" for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control " placeholder="Username"/>
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                <label class="form-label" for="email">E-mail</label>
                                <input type="email" id="email" name="email" class="form-control " placeholder="Nama Lengkap"/>
                              </div>
                            </div>
          
                            <div class="d-flex flex-row align-items-center mb-4">
                              <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control " placeholder="Password"/>
                              </div>
                            </div>
          
                           
                           
          
                            <div class="d-flex justify-content-center mb-3 mb-lg-4">
                              <button  type="submit" class="btn btn-primary btn-lg flex-fill">Register</button>
                              <hr>
                              
                            </div>
                            <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}" class="text-decoration-none">Masuk sekarang!</a></p>
          
                          </form>
          
                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
          
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                            class="img-fluid" alt="Sample image">
          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </body>
</html>