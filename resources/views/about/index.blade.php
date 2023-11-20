@extends('layouts.topbar')
@section('content')

<div class="container-fluid mt-5 pt-5">
        <div class="text-center">
            <h3>Profil</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class=" col-md-3">
                    <div class="card mb-4 border-0 shadow-lg">
                    <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <small class="card-category text-secondary">Admin</small>
                      <p class="card-title fw-bold fs-5">RoSa XII RPL</p>
                      <div class="row ">
                      <a href="#" class="ig-icon text-primary"><i class="bi bi-instagram"></i></a>
                      <a href="#" class="whatsapp-icon text-primary"><i class="bi bi-whatsapp"></i></a>
                      <a href="#" class="twit-icon text-primary"><i class="bi bi-twitter"></i></a>
                      </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection