@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-dark">Add new Category</h1>
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
            <input type="text" class="form-control" id="name" name="name" placeholder="Category Name">
        </div>
        {{-- <div class="col-md-6 mb-3">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" readonly>
        </div> --}}
        <div class="col-md-6 mb-3">
            <label for="slug">Parent Category <small class="text-danger">*Keep it null to make root parent</small></label>
            <select class="form-select" name="category">
                <option selected></option>
                @foreach ($category as $key)
                    <option value={{ $key->id }}>{{ $key->name }}</option>
                @endforeach
              </select>
        </div>
    </div>
    <button class="btn btn-primary px-4" type="submit">Confirm</button>
    </form>
</div>
@endsection