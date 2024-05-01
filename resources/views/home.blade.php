@extends('layouts.app')

@section('content')
      <div class="container mt-4 d-flex justify-content-center">
      <div id="carouselExampleCaptions" class="carousel slide" style="width: 1300px;">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ Vite::asset('resources/images/barangg1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>PERABOTAN RUANG TAMU</h5>
              <p>kami menyediakan berbagai perabotan ruang tamu mulai dari sofa, meja, lemari dan lain lain</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ Vite::asset('resources/images/barangg2.jpeg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>PERABOTAN KAMAR</h5>
              <p>kami meyediakan berbagai perabotan kamar mulai dari spring bed, bantal, guling, lemari dan lain lain</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ Vite::asset('resources/images/barangg3.png') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="color:black">PERABOTAN KAMAR MANDI</h5>
              <p style="color:black">kami menyediakan berbagai perabotan kamar mandi mulai dari gayung, rak, handuk, dan lain lain</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>
      <div class="container mt-4">
        <p class="fs-2 fw-bold text-center">Fitur Fitur Untuk Anda</p>
        <p class="fw-light text-center">Demi kenyamanan dan kepuasan anda, berikut fitur fitur yang kami berikan untuk anda</p>
    </div>

    <div class="container mt-4">
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
          <div class="card">
            <div class="card-body">
               <h1 class="text-center"><i class="bi bi-box-seam-fill"></i></h1>
              <p class="card-text fs-5">Barang anda akan kami packing dengan box serta memberi perlindungan extra seperti buble warp </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h1 class="text-center"><i class="bi bi-truck"></i></h1>
              <p class="card-text fs-5">Barang anda akan kami kirim dengan ekspedisi ternama yang dapat menjangkau semua daerah</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card">
                <div class="card-body">
                   <h1 class="text-center"><i class="bi bi-tags"></i></h1>
                  <p class="card-text fs-5">Kami akan memberikan harga termurah untuk anda tetapi dengan kualitas yang luar biasa</p>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h1 class="text-center"><i class="bi bi-telephone"></i></h1>
                  <p class="card-text fs-5">Anda dapat menghubungi kami 24 Jam untuk menanyakan seputar produk kami</p>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
