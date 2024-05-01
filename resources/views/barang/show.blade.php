@extends('layouts.app')

@section('content')
      <div class="container mt-5 d-flex justify-content-center">
        <div class="card" style="width: 500px;">
          <img src="{{ Vite::asset('resources/images/gudangshow2.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center font-monospace mt-2">DETAIL BARANG</h5>
          </div>
          <div class="row g-2">
            <div class="col-md">
              <div class="form-floating font-monospace fs-5 fw-bold">
                <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="{{ $barang->kode_barang }}" disabled>
                <label for="floatingInputGrid">Kode Barang</label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating font-monospace fs-5 fw-bold">
                <input type="email" class="form-control " id="floatingInputGrid" placeholder="name@example.com" value="{{ $barang->nama_barang }} " disabled>
                <label for="floatingInputGrid">Nama Barang</label>
              </div>
            </div>
          </div>
          <div class="row g-2 mt-2">
            <div class="col-md">
                <div class="form-floating font-monospace fs-5 fw-bold">
                  <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="{{ $barang->harga_barang }}" disabled>
                  <label for="floatingInputGrid">Harga Barang</label>
                </div>
            </div>
            {{-- QUERY BUILDER FIELD SATUAN --}}
            {{-- <div class="col-md">
                <div class="form-floating font-monospace fs-5 fw-bold">
                  <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="{{ $barang->satuan_nama_satuan }}" disabled>
                  <label for="floatingInputGrid">Satuan Barang</label>
                </div>
            </div> --}}
            {{-- ELOQUENT FIELD SATUAN --}}
            <div class="col-md">
                <div class="form-floating font-monospace fs-5 fw-bold">
                  <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="{{ $barang->satuan->nama_satuan }}" disabled>
                  <label for="floatingInputGrid">Satuan Barang</label>
                </div>
            </div>
          </div>
          <div class="row g-2 mt-2">
            <div class="col-md2">
                <div class="form-floating font-monospace fs-5 fw-bold">
                  <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="{{ $barang->deskripsi_barang }}" disabled>
                  <label for="floatingInputGrid">Deskripsi Barang</label>
                </div>
            </div>
            <div class="col-12">
                <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-2 col-12"><i class="bi-arrow-left-circle me-2"></i>BACK</a>
              </div>
          </div>
        </div>
      </div>
@endsection
