@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-dark">Edit Category</h1>
</div>
<div class="container">
    <a href="{{ route('admin-category') }}" class="btn btn-success mb-3">Return</a>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $item)
            <li>{{ $item }}</li>
            @endforeach    
        </div>
        @endif

    <form action="" method="POST">
        @csrf
    <div class="row ">
        <div class="col-md-6 mb-3">
        <label for="name">Category Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" value="{{ $details->name }}">
        </div>
        <div class="col-md-6 mb-3">
            <label for="slug">Parent Category <small class="text-danger">*Keep it null to make root parent</small></label>
            <select class="form-select" name="category">
                @if ($parentCateg != null)
                     @foreach ($category as $key)
                    <option value={{ $key->id }} {{ $key->id == $parentCateg->id ? 'selected' : '' }} >{{ $key->name }}</option>
                    @endforeach  
                @else
                    <option selected></option>
                    @foreach ($category as $key)
                    <option value={{ $key->id }} >{{ $key->name }}</option>
                    @endforeach 
                @endif
                
               
              </select>
        </div>
    </div>
    <button class="btn btn-primary px-4" type="submit">Save Changes</button>
    </form>
</div>
@endsection