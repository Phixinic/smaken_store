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
        <a href="" class="btn p-4 bi bi-gem"> Game</a>
        <a href="" class="btn p-4 bi bi-stars">TopUp Pulsa</a>
        <a href="" class="btn p-4 bi bi-sunglasses">Merch</a>
        <a href="" class="btn p-4 bi bi-basket">Produk</a>
    </ul>
</div>
{{-- Bar Fitur --}}
{{-- content --}}
<div class="container">
    <div class="row m-2">
        <div class="card" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</div>


@endsection