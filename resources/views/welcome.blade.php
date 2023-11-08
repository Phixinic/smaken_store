@extends('layouts.topbar')


@section('content')
<div class="container-fluid mt-5 pt-5">
    {{-- HERO --}}
    <div class="container px-5 mb-4">
        <div class="hero" id="hero">
            <div><img src="https://source.unsplash.com/random/1000x300" alt="" class="img-fluid"></div>
    
        </div>
    </div>
    {{-- HERO --}}
</div>
{{-- Bar Fitur --}}
<div class="bg-primary my-3">
    <ul class="d-flex justify-content-evenly flex-wrap">
        <a href="" class="btn p-4">TopUp Game</a>
        <a href="" class="btn p-4">TopUp Pulsa</a>
        <a href="" class="btn p-4">Merch</a>
        <a href="" class="btn p-4">Produk</a>
    </ul>
</div>
{{-- Bar Fitur --}}
{{-- content --}}
<div class="container">
    <div class="row m-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-category text-secondary">Merch</p>
                <p class="card-title fs-4">Nama Produk</p>
              <p class="card-text">Some quick example text.</p>
              <p class="card-price fw-bold fs-5">Rp.9000</p>
            </div>
        </div>
    </div>
</div>
@endsection