@extends('layouts.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h3 class="mb-0 text-dark">Users Detail</h3>
</div>
<div class="row">
    <div class="col-md-6 mb-3">
        <div class="d-flex mb-3">
            <div class="mx-4">
                <h5>Username :</h5>
                {{ $details->username }}
            </div>
            <div class="mx-4">
                <h5>Role :</h5>
                <h4><span class="badge bg-warning">Seller</span></h4>
            </div>
            <div class="mx-4">
                <h5>Products :</h5>
                <h4>{{ $details->product->count() }}</h4>
            </div>
        </div>
        <div class="d-flex mb-3">
            <div class="mx-4">
                <h5>Email :</h5>
                {{ $details->email }}
            </div>
            <div class="mx-4">
                <h5>Status :</h5>
                @if ($details->status == 'verified')
                <h4><span class="badge bg-success">Verified</span></h4>
                @endif
                @if ($details->status == 'pending')
                <h4><span class="badge bg-warning">Pending</span></h4>
                @endif
                @if ($details->status == 'blocked')
                <h4><span class="badge bg-danger">Blocked</span></h4>
                @endif
                
            </div>
        </div>
    </div>
</div>
<a href="{{ route('admin-users') }}" class="btn btn-success rounded-0 px-3 py-2">Return</a>

@endsection