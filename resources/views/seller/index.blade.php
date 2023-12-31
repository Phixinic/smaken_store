@extends('layouts.admin')

@section('content')
    
    <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">
  
    <div class="col-xl-3 col-md-5">
        <div class="card bg-success text-white mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-5 d-flex align-items-center justify-content-center">
                        <h3><i class="fas fa-file"></i></h3>
                    </div>
                    <div class="col-7">
                        <div class="card-title">
                            <h5>Products</h5>
                        </div>
                        <div class="card-text">
                            10
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="col-xl-3 col-md-5">
        <div class="card bg-secondary text-white mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-5 d-flex align-items-center justify-content-center">
                        <h3><i class="fas fa-file"></i></h3>
                    </div>
                    <div class="col-7">
                        <div class="card-title">
                            <h5>Pending Products</h5>
                        </div>
                        <div class="card-text">
                            10
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection