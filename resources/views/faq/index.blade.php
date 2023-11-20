@extends('layouts.topbar')
@section('content')

<div class="container-fluid mt-5 pt-5">
    <div class="row mx-3 mb-4">
        <div class="col-5 d-flex align-items-center text-wrap text-primary mx-4">
            <h2>Pertanyaan apa yang sering diajukan?</h2>
        </div>
        <div class="col d-flex justify-content-center">
            <img src="{{ asset('assets/img/FAQ.png') }}" class="img-fluid" alt="" >
        </div>
    </div>
    
    <div class="accordion accordion-flush px-5" id="accordionFlushExample">
        <div class="accordion-item mb-3">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Bagaimana Caranya Mendaftar?
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Untuk membuat Akun hubungi admin di halaman bagian <b>About</b></div>
          </div>
        </div>

        <div class="accordion-item mb-3">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Apa saja keunggulan dari website ini?
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">SMAKEN Store memudahkan para murid SMKN 1 Lumajang untuk berwirausaha dengan menjangkau pelanggan diluar sekolah</div>
          </div>
        </div>

        <div class="accordion-item mb-3">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Saya masih awam dengan website ini
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, corrupti?</div>
          </div>
        </div>
      </div>
</div>

@endsection