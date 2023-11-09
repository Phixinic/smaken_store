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


@endsection