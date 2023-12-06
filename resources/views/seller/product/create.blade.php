@extends('layouts.admin')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-dark">Add new Products</h1>
</div>
<div class="container">
    <a href="{{ route('product-user') }}" class="btn btn-success mb-3">Return</a>


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
    <select class="form-select" aria-label="Default select example">
        <option selected disabled>Select Category</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>  
    </div>
    <div class="col-md-6 mb-3">
        <label for="photo">Photo</label>
        <input type="file" class="form-control" id="photo" name="photo" placeholder="Product Price">
        </div>
</div>
<button class="btn btn-primary px-4">Confirm</button>
</div>
@endsection