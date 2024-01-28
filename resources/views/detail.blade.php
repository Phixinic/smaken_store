@extends('layouts.topbar')

@section('content')
<div class="container-fluid pt-5 mt-5">
    <div class="row mt-3 px-3 mb-4">
        <div class="col-md-5 mb-3">
            <img src="{{ asset('storage/'.$detail->image) }}" alt="" class="img-fluid" width="450px" height="450px">
        </div>
        <div class="col-md-7">
            <h2 class="fw-bolder">{{ $detail->name }}</h2>
            <a href="https://wa.me/089515793188" class="btn btn-secondary rounded-0 mb-4"><i class="bi bi-whatsapp me-1"></i> Pesan Sekarang</a>
            <h4 class="mb-2">Kategori</h4>
            <div class="mx-1 d-flex mb-3">
                {{-- @foreach ($detail->category as $item)
                    <a href="" class="text-decoration-none text-primary">Barang</a>
                    <p class="mx-2">-></p> 
                @endforeach --}}
                <a href="" class="text-decoration-none text-primary" id="category">{{ $detail->category->name }}</a>
                {{-- <p class="mx-2">-></p>    
                <a href="" class="text-decoration-none text-primary">Merch</a>
                <p class="mx-2">-></p>    
                <a href="" class="text-decoration-none text-primary">Jaket</a> --}}
            </div>
            <h4 class="mb-2">Harga</h4>
            <p class="mx-1 mb-3">Rp. {{ $detail->price }}</p>
            <h4 class="mb-2">Deskripsi</h4>
            <p class="mx-1 mb-3">{{ $detail->description }}</p>
        </div>
    </div>
    <h3 class="mt-5 pt-3 px-3 text-primary mb-3">Rekomendasi</h3>
    <div class="row row-cols-2 px-3 mb-4" id="product-list">
        {{--  --}}
        @foreach ($reccomendation as $item)
        <div class="col-md-3 mb-3">
            <div class="card m-1 border-0 shadow-lg">
            <img src="{{ asset('storage/'.$item->image) }}" class="card-img-top" height="220px" width="241px" alt="...">
            <div class="card-body">
                <small class="card-category text-secondary">{{ $item->category->name }}</small>
                <p class="card-title fs-4 mt-2">{{ $item->name }}</p>
              {{-- <p class="card-text">XL</p> --}}
              <p class="card-price fw-bold fs-5 text-primary">Rp {{ $item->price }}</p>
              <div class="d-flex">
                <a href="{{ route('detail-barang', $item->slug)   }}" type="button" class="btn btn-warning flex-fill">Beli</a>
                {{-- <a href="https://wa.me/089515793188" type="button" class="btn btn-warning flex-fill">Beli</a> --}}
            </div>
            </div>
            </div>
        </div
        @endforeach
        {{-- <div class="col-md-3 mb-3">
            <div class="card m-1 border-0 shadow-lg">
            <img src="{{ ('assets/img/baju.jpeg') }}" class="card-img-top" height="220px" width="241px" alt="...">
            <div class="card-body">
                <small class="card-category text-secondary">Produk</small>
                <p class="card-title fs-4 mt-2">Jaket</p>
              <p class="card-text">XL</p>
              <p class="card-price fw-bold fs-5 text-primary">Rp 90.000 &nbsp;</p>
              <div class="d-flex">
                <a href="https://wa.me/089515793188" type="button" class="btn btn-warning flex-fill">Beli</a>
            </div>
            </div>
            </div>
        </div> --}}
        {{--  --}}
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/util/detail.js') }}"></script>

@endsection