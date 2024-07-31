
@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-dark">{{ $detail->name }}</h1>
</div>
<a class="btn btn-primary mb-3" href="{{ route('admin-product') }}">Kembali</a>
<div class="row">
    <div class="col-md-5 mb-3">
        <img src="{{ asset('storage/'.$detail->image) }}" alt="" class="img-fluid w-100 rounded bg-danger p-1" >
    </div>
    <div class="col-md-7 d-flex">
        <div class="me-5 pe-1">
            <h5>Product Name</h5>
            <p>{{ $detail->name }}</p>
            <h5>Username</h5>
            <p>{{ $detail->user->username }}</p>
            <h5>Price</h5>
            <p>{{ $detail->price }}</p>
        </div>
        <div class=" px-1">
            <h5>Category</h5>
            <p>{{ $detail->category->name }}</p>
            <h5>Description</h5>
            <p>{{ $detail->description }}</p>
        </div>
        
    </div>

</div>
<div class="d-flex justify-content-end mb-5">
    @if ($detail->status != 'verified')
             
    <form action="{{ route('status-product',$detail->id) }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-success me-2 px-5">Verify</button>
        </form>
    @endif
    @if ($detail->status != 'rejected')
    <form action="{{ route('status-product',$detail->id) }}" method="POST" class="d-inline">
        @csrf
            <button type="submit" class="btn btn-danger px-5">Reject</button>
        </form>
    @endif
    {{-- <button class="btn btn-success me-2 px-3">Verificate</button>
    <button class="btn btn-danger px-4">Reject</button> --}}
</div>
@endsection
    