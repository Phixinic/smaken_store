<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi - Lelang Online</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</head>
<body style="background-color: rgb(246, 229, 178)">

        <section class="vh-100">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                  <div class="card shadow-2-strong" style="border-radius: 1rem;">
                    <div class="card-body p-5 rounded-3" style="background-color: rgb(203, 165, 115)">
                        
                        <div class="text-center mb-4">
                            <h2 class="mb-3">Registrasi Akun</h2>
                        </div>
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
                        <form action="" method="POST">
                          @csrf
                              <div class="form-outline mb-3">
                                <label class="form-label" for="username">Username</label>
                                <input type="text" id="username" name="username" class="form-control " placeholder="Username"/>
                              </div>
                              <div class="form-outline mb-3">
                                <label class="form-label" for="email">E-mail</label>
                                <input type="email" id="email" name="email" class="form-control " placeholder="Nama Lengkap"/>
                              </div>
                              <div class="form-outline mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control " placeholder="Password"/>
                              </div>
        
                              <div class="d-flex">
                                  <button class="btn btn-success flex-fill" type="submit">Daftar</button>
                              </div>
                        </form>

                      <hr>
                          <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}" class="text-decoration-none">Masuk sekarang!</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

</body>
</html>