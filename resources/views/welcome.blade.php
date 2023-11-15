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
<div class="bg-primary my-2">
    <ul class="d-flex justify-content-evenly flex-wrap">
        <a href="" class="btn p-4 text-light fw-bolder"><i class="bi bi-gem"></i>  TopUp Game</a>
        <a href="" class="btn p-4 text-light fw-bolder"><i class="bi bi-stars"></i>  TopUp Pulsa</a>
        <a href="" class="btn p-4 text-light fw-bolder"><i class="bi bi-sunglasses"></i>  Merch</a>
        <a href="" class="btn p-4 text-light fw-bolder"><i class="bi bi-basket"></i>  Produk</a>
    </ul>
</div>
{{-- Bar Fitur --}}
{{-- content --}}
<div class="container">
    <div class="text-center">
        <h1>All Product</h1>
        <div class="container-fluid justify-content-center w-50">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search something.." aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
    </div>
    <div class="row m-2">
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-category text-secondary">Topup Game</p>
                <p class="card-title fs-4">Mobile Legends</p>
              <p class="card-text">50 Diamond</p>
              <p class="card-price fw-bold fs-5">Rp 15.000</p>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-category text-secondary">Topup Pulsa</p>
                <p class="card-title fs-4">Telkomsel</p>
              <p class="card-text">Pulsa 10k</p>
              <p class="card-price fw-bold fs-5">Rp 12.000</p>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-category text-secondary">Merch</p>
                <p class="card-title fs-4">Baju Gita</p>
              <p class="card-text">Ada air liur Gita😋</p>
              <p class="card-price fw-bold fs-5">Rp 1.000.000</p>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-category text-secondary">Produk</p>
                <p class="card-title fs-4">Power F</p>
              <p class="card-text">Menyegarkan</p>
              <p class="card-price fw-bold fs-5">Rp 1.000</p>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-category text-secondary">Merch</p>
                <p class="card-title fs-4">Nama Produk</p>
              <p class="card-text">Some quick example text.</p>
              <p class="card-price fw-bold fs-5">Rp </p>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-category text-secondary">Merch</p>
                <p class="card-title fs-4">Nama Produk</p>
              <p class="card-text">Some quick example text.</p>
              <p class="card-price fw-bold fs-5">Rp </p>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-category text-secondary">Merch</p>
                <p class="card-title fs-4">Nama Produk</p>
              <p class="card-text">Some quick example text.</p>
              <p class="card-price fw-bold fs-5">Rp </p>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-category text-secondary">Merch</p>
                <p class="card-title fs-4">Nama Produk</p>
              <p class="card-text">Some quick example text.</p>
              <p class="card-price fw-bold fs-5">Rp </p>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-category text-secondary">Merch</p>
                <p class="card-title fs-4">Nama Produk</p>
              <p class="card-text">Some quick example text.</p>
              <p class="card-price fw-bold fs-5">Rp </p>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-category text-secondary">Merch</p>
                <p class="card-title fs-4">Nama Produk</p>
              <p class="card-text">Some quick example text.</p>
              <p class="card-price fw-bold fs-5">Rp </p>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-category text-secondary">Merch</p>
                <p class="card-title fs-4">Nama Produk</p>
              <p class="card-text">Some quick example text.</p>
              <p class="card-price fw-bold fs-5">Rp </p>
            </div>
        </div>
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ ('assets/img/test1.jpg') }}" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-category text-secondary">Merch</p>
                <p class="card-title fs-4">Nama Produk</p>
              <p class="card-text">Some quick example text.</p>
              <p class="card-price fw-bold fs-5">Rp </p>
            </div>
        </div>
    </div>
</div>
@endsection