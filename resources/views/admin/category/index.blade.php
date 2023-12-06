@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-dark">Category</h1>
</div>
<a href="{{ route('add-category') }}" class="btn btn-primary mb-3">Add Category</a>
@if (session('status'))
<div class="alert alert-warning">
     {{ session('message') }}
</div>    
@endif
<table class="table text-dark">
    <thead>
      <tr>
        <th>#</th>
        <th>Category Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($category as $item)
        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $item->name }}</td>
            <td>
                <form action="{{ route('delete-category', $item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                       <button type="submit" class="btn btn-danger">Delete</button>
                   </form>
              
                   <a href="{{ route('edit-category', $item->id) }}" class="btn btn-warning">Edit</a>
            
          
           
                
            </td>
          </tr>
        @endforeach
    
    </tbody>
  </table>
@endsection
