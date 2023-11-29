@extends('layouts.topbar')

@section('content')
<div class="container-fluid pt-5 mt-5">
    <div class="row mt-3 px-3 mb-4">
        <div class="col-md-5 mb-3">
            <img src="{{ ('assets/img/baju.jpeg') }}" alt="" class="img-fluid" width="450px" height="450px">
        </div>
        <div class="col-md-7">
            <h2 class="fw-bolder">Jaket Keren (Sample)</h2>
            <a href="https://wa.me/089515793188" class="btn btn-secondary rounded-0 mb-4"><i class="bi bi-whatsapp me-1"></i> Pesan Sekarang</a>
            <h4 class="mb-2">Kategori</h4>
            <div class="mx-1 d-flex">
                <a href="" class="text-decoration-none text-primary">Barang</a>
                <p class="mx-2">-></p>    
                <a href="" class="text-decoration-none text-primary">Merch</a>
                <p class="mx-2">-></p>    
                <a href="" class="text-decoration-none text-primary">Jaket</a>
            </div>
            <h4 class="mb-2">Harga</h4>
            <p class="mx-1 mb-3">Rp, 90.000</p>
            <h4 class="mb-2">Deskripsi</h4>
            <p class="mx-1 mb-3">Jaket Keren Asli Pandeglag. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam ipsa ipsam ipsum itaque, soluta, est earum inventore placeat perspiciatis
                 incidunt reiciendis? Culpa quis porro quam tenetur aut numquam distinctio nihil 
                 ullam possimus eius beatae suscipit modi dolorem, eum animi unde molestias? Neque 
                 laudantium minima tempore vel ratione eius, perspiciatis maiores amet, necessitat
                 ibus asperiores saepe fuga nihil odio accusantium quisquam perferendis deserunt a
                 ccusamus inventore debitis facilis veniam voluptatum nisi. Fugiat consequatur ips
                 a reiciendis quos quae assumenda, debitis quam vero eligendi optio accusamus repre
                 henderit natus nemo ratione unde voluptates ipsum sunt tempore? Itaque voluptas, d
                 eleniti velit explicabo nostrum laborum quo. Inventore, at!</p>
        </div>
    </div>
    <h3 class="mt-5 pt-3 px-3 text-primary mb-3">Rekomendasi</h3>
    <div class="row row-cols-2 px-3 mb-4">
        <div class="col-md-3 mb-3">
            <div class="card m-1 border-0 shadow-lg">
            <img src="{{ ('assets/img/baju.jpeg') }}" class="card-img-top" height="220px" width="241px" alt="...">
            <div class="card-body">
                <small class="card-category text-secondary">Produk</small>
                <p class="card-title fs-4 mt-2">Jaket</p>
              <p class="card-text">XL</p>
              <p class="card-price fw-bold fs-5 text-primary">Rp 90.000 &nbsp;</p>
              <div class="d-flex">
                <a href="https://wa.me/089515793188" type="button" class="btn btn-warning flex-fill">Beli</a>
            </div>
            </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card m-1 border-0 shadow-lg">
            <img src="{{ ('assets/img/ml.jpeg') }}" class="card-img-top" height="220px" width="241px" alt="...">
            <div class="card-body">
                <small class="card-category text-secondary">Topup Game</small>
                <p class="card-title fs-4 mt-2">Mobile Legends</p>
              <p class="card-text">50 Diamond</p>
              <p class="card-price fw-bold fs-5 text-primary">Rp 15.000 &nbsp;</p>
              <div class="d-flex">
                  <a href="https://wa.me/089515793188" type="button" class="btn btn-warning flex-fill">Beli</a>
              </div>
            </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card m-1 border-0 shadow-lg">
            <img src="{{ ('assets/img/pulsa.jpeg') }}" height="220px" width="241px" class="card-img-top" alt="...">
            <div class="card-body">
                <small class="card-category text-secondary">Topup Pulsa</small>
                <p class="card-title fs-4 mt-2">Telkomsel</p>
              <p class="card-text">10.000</p>
              <p class="card-price fw-bold fs-5 text-primary">Rp 12.000 &nbsp;</p>
              <div class="d-flex">
                  <a href="https://wa.me/089515793188" type="button" class="btn btn-warning flex-fill">Beli</a>
              </div>
            </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card m-1 border-0 shadow-lg">
            <img src="{{ ('assets/img/test1.jpg') }}" height="220px" width="241px" class="card-img-top" alt="...">
            <div class="card-body">
                <small class="card-category text-secondary">Merch</small>
                <p class="card-title fs-4 mt-2">Gita😋</p>
              <p class="card-text">165cm</p>
              <p class="card-price fw-bold fs-5 text-primary">Rp 20.000.000 &nbsp;</p>
              <div class="d-flex">
                  <a href="https://wa.me/089515793188" type="button" class="btn btn-warning flex-fill">Beli</a>
              </div>
              
            </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card m-1 border-0 shadow-lg">
            <img src="{{ ('assets/img/baju.jpeg') }}"  height="220px" width="241px" class="card-img-top" alt="...">
            <div class="card-body">
                <small class="card-category text-secondary">Produk</small>
                <p class="card-title fs-4 mt-2">Jaket</p>
              <p class="card-text">XL</p>
              <p class="card-price fw-bold fs-5 text-primary">Rp 90.000 &nbsp;</p>
              <div class="d-flex">
                <a href="https://wa.me/089515793188" type="button" class="btn btn-warning flex-fill">Beli</a>
            </div>
            </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card m-1 border-0 shadow-lg">
            <img src="{{ ('assets/img/ml.jpeg') }}" height="220px" width="241px" class="card-img-top" alt="...">
            <div class="card-body">
                <small class="card-category text-secondary">Topup Game</small>
                <p class="card-title fs-4 mt-2">Mobile Legends</p>
              <p class="card-text">50 Diamond</p>
              <p class="card-price fw-bold fs-5 text-primary">Rp 15.000 &nbsp;</p>
              <div class="d-flex">
                  <a href="https://wa.me/089515793188" type="button" class="btn btn-warning flex-fill">Beli</a>
              </div>
            </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card m-1 border-0 shadow-lg">
            <img src="{{ ('assets/img/pulsa.jpeg') }}"  height="220px" width="241px" class="card-img-top" alt="...">
            <div class="card-body">
                <small class="card-category text-secondary">Topup Pulsa</small>
                <p class="card-title fs-4 mt-2">Telkomsel</p>
              <p class="card-text">10.000</p>
              <p class="card-price fw-bold fs-5 text-primary">Rp 12.000 &nbsp;</p>
              <div class="d-flex">
                  <a href="https://wa.me/089515793188" type="button" class="btn btn-warning flex-fill">Beli</a>
              </div>
            </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card m-1 border-0 shadow-lg">
            <img src="{{ ('assets/img/test1.jpg') }}" height="220px" width="241px" class="card-img-top" alt="...">
            <div class="card-body">
                <small class="card-category text-secondary">Merch</small>
                <p class="card-title fs-4 mt-2">Gita😋</p>
              <p class="card-text">165cm</p>
              <p class="card-price fw-bold fs-5 text-primary">Rp 20.000.000 &nbsp;</p>
              <div class="d-flex">
                  <a href="https://wa.me/089515793188" type="button" class="btn btn-warning flex-fill">Beli</a>
              </div>
              
            </div>
            </div>
        </div>
    </div>
</div>
    
@endsection