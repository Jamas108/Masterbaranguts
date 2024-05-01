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
                  <h2 class="card-title font-monospace text-center">EDIT BARANG</h5>
                    <form class="row g-3" action="{{ route('barang.update',['barang' => $barang->id]) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="col-12">
                          <label class="form-label">Kode Barang</label>
                          {{-- QUERY BUILDER --}}
                          {{-- <input class="form-control @error('kodebarang') is-invalid @enderror" type="text"  name="kodebarang" id="kodebarang" value="{{$barang -> kode_barang }}" placeholder="Masukan Kode Barang"> --}}
                          {{-- ELOQUENT --}}
                          <input class="form-control @error('kodebarang') is-invalid @enderror" type="text"  name="kodebarang" id="kodebarang" value="{{ $errors->any() ? old('kodebarang') : $barang->kode_barang}}" placeholder="Masukan Kode Barang">
                          @error('kodebarang')
                          <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                        </div>
                        <div class="col-12">
                          <label class="form-label">Nama Barang</label>
                            {{-- QUERY BUILDER --}}
                            {{-- <input class="form-control @error('namabarang') is-invalid @enderror" type="text"  name="namabarang" id="namabarang" value="{{$barang -> nama_barang }}" placeholder="Masukan Nama Barang"> --}}
                            {{-- ELOQUENT  --}}
                            <input type="text" class="form-control @error('namabarang') is-invalid @enderror" name="namabarang" id="namabarang" value="{{ $errors->any() ? old('namabarang') : $barang->nama_barang }}" placeholder="Masukan Nama Barang">
                          @error('namabarang')
                          <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label">Harga Barang</label>
                             {{-- QUERY BUILDER --}}
                             {{-- <input class="form-control @error('hargabarang') is-invalid @enderror" type="text"  name="hargabarang" id="hargabarang" value="{{$barang -> harga_barang }}" placeholder="Masukan Harga Barang"> --}}
                             {{-- ELOQUENT --}}
                             <input type="text" class="form-control @error('hargabarang') is-invalid @enderror" name="hargabarang" id="hargabarang" value="{{ $errors->any() ? old('hargabarang') : $barang->harga_barang}}" placeholder="Masukan Harga Barang">
                            @error('hargabarang')
                            <div class="text-danger"><small>{{ $message }}</small></div>
                          @enderror
                          </div>
                        <div class="col-12">
                          <label class="form-label">Deskripsi Barang</label>
                           {{-- QUERY BUILDER --}}
                           {{-- <input class="form-control @error('deskripsibarang') is-invalid @enderror" type="text"  name="deskripsibarang" id="deskripsibarang" value="{{$barang -> deskripsi_barang }}" placeholder="Masukan Deskripsi Barang"> --}}
                           {{-- ELOQUENT --}}
                           <input type="text" class="form-control @error('deskripsibarang') is-invalid @enderror" name="deskripsibarang" id="deskripsibarang" value="{{ $errors->any() ? old('deskripsibarang') : $barang->deskripsi_barang }}" placeholder="Masukan Deskripsi Barang">
                          @error('deskripsibarang')
                          <div class="text-danger"><small>{{ $message }}</small></div>
                        @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="form-label">Satuan Barang</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @php
                                 $selected = "";
                                if ($errors->any())
                                  $selected = old('satuan');
                                else
                                $selected = $barang->satuan_id;
                        @endphp
                                @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->id }}" {{ $selected == $satuan->id ? 'selected' : '' }}>{{ $satuan->kode_satuan.' - '.$satuan->nama_satuan }}</option>
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
