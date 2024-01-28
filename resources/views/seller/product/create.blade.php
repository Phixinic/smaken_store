@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-dark">Add new Products</h1>
</div>
<div class="container">
    <a href="{{ route('product-user') }}" class="btn btn-success mb-3">Return</a>

    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $item)
        <li>{{ $item }}</li>
        @endforeach    
    </div>
    @endif
<form action="" method="post" enctype="multipart/form-data">
    @csrf

<div class="row ">
    <div class="col-md-6 mb-3">
    <label for="name">Product Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Product Name">
    </div>
    <div class="col-md-6 mb-3">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" name="price" placeholder="Product Price">
    </div>
    <div class="col-md-6 mb-3">
    <label for="desc">Description</label>
        <textarea name="description" id="desc" class="form-control" cols="3" rows="5"></textarea>
    </div>
    <div class="col-md-6 mb-3">
        <label for="category">Category</label>
        <select class="form-select" name="category_id">
            <option selected></option>
            @foreach ($category as $key)
                <option value={{ $key->id }}>{{ $key->name }}</option>
            @endforeach
          </select>
    </div>
    <div class="col-md-6 mb-3">
        <label for="image">Photo</label>
        <input type="file" class="form-control" id="image" name="image">
        </div>
</div>
<button class="btn btn-primary px-4" type="submit">Confirm</button>
</form>
</div>
@endsection