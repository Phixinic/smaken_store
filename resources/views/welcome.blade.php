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
    <div class="text-center mb-4">
        <h1 class="mb-3">All Product</h1>
        <div class="container-fluid justify-content-center w-75">
            <form class="d-flex" role="search">
              <input class="form-control mx-2" type="search" placeholder="Search something.." aria-label="Search">
              <button class="btn btn-primary rounded-2" type="submit">Search</button>
            </form>
          </div>
    </div>
    <div class="row row-cols-2 mb-3 mt-4" id="product-list">
        {{-- <div class="col-md-3 mb-3">
            <div class="card m-1 border-0 shadow-lg">
                <div class="image-product">
                    <img src="{{ asset('assets/img/baju.jpeg') }}" class=" card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <small class="card-category text-secondary">Produk</small>
                    <p class="card-title fs-4 mt-2">Jaket</p>
                    <p class="card-text">XL</p>
                    <p class="card-price fw-bold fs-5 text-primary">Rp 90.000 &nbsp;</p>
                    <div class="d-flex">
                        <a href="{{ route('detail-barang') ,  }}" type="button" class="btn btn-warning flex-fill">Beli</a>
                    </div>
                </div>
            </div>
        </div> --}}
        
        
    </div>
</div>
<script src="{{ asset('assets/js/util/dashboard.js') }}"></script>
@endsection