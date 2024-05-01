@extends('layouts.app')

@section('content')
      <div class="container mt-4 d-flex justify-content-center">
        <div class="card mb-3" style="width: 1000px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img style="height:700px" src="{{ Vite::asset('resources/images/bggudangs.jpg') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h2 class="card-title font-monospace text-center">INPUT BARANG</h5>
                    <form class="row g-3" action="{{ route('barang.store') }}" method="POST">
                        @csrf
                        <div class="col-12">
                          <label class="form-label">Kode Barang</label>
                          <input class="form-control @error('kodebarang') is-invalid @enderror autofocus" type="text"  name="kodebarang" id="kodebarang" value="{{ old('kodebarang') }}" placeholder="Masukan Kode Barang">
                          
                          @error('kodebarang')
                          <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                        </div>
                        <div class="col-12">
                          <label class="form-label">Nama Barang</label>
                          <input type="text" class="form-control @error('namabarang') is-invalid @enderror" name="namabarang" id="namabarang" value="{{ old('namabarang') }}" placeholder="Masukan Nama Barang">
                          @error('namabarang')
                          <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label">Harga Barang</label>
                            <input type="text" class="form-control @error('hargabarang') is-invalid @enderror" name="hargabarang" id="hargabarang" value="{{ old('hargabarang') }}" placeholder="Masukan Harga Barang">
                            @error('hargabarang')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                          @enderror
                          </div>
                        <div class="col-12">
                          <label class="form-label">Deskripsi Barang</label>
                          <input type="text" class="form-control @error('deskripsibarang') is-invalid @enderror" name="deskripsibarang" id="deskripsibarang" value="{{ old('deskripsibarang') }}" placeholder="Masukan Deskripsi Barang">
                          @error('deskripsibarang')
                          <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="form-label">Satuan Barang</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @foreach ($satuans as $satuan)
                                    <option value="{{ $satuan->id }}" {{ old('satuan') == $satuan->id ? 'selected' : '' }}>{{ $satuan->kode_satuan.' - '.$satuan->nama_satuan }}</option>
                                @endforeach
                            </select>
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn col-12">Save</button>
                        </div>
                        <div class="col-12">
                            <a href="{{ route('barang.index') }}" class="btn col-12">Cancel</a>
                          </div>
                      </form>
                </div>
              </div>
            </div>
          </div>
      </div>
@endsection
