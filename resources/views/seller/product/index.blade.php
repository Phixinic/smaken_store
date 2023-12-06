
@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-dark">Products</h1>
</div>
<a href="{{ route('add-product') }}" class="btn btn-primary mb-3">Add Product</a>
<table class="table text-dark">
    <thead>
      <tr>
        <th>#</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($product as $item)
        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $item->name }}</td>
            <td>{{ $item->price }}</td>
            @if ($item->status == 'verified')
            <td><span class="badge text-bg-success">Verified</span></td>
            @endif
            @if ($item->status == 'pending')
            <td><span class="badge text-bg-warning">Pending</span></td>
            @endif
            @if ($item->status == 'rejected')
            <td><span class="badge text-bg-danger">Rejected</span></td>
            @endif
            <td>

             <a href="" class="btn btn-warning">Edit</a>
            
             <form action="" method="POST" class="d-inline">
                 @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
           
                
            </td>
          </tr>
        @endforeach
    
    </tbody>
  </table>
@endsection
    