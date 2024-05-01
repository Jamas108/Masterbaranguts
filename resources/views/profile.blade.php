@extends('layouts.app')

@section('content')
      <div class="container mt-4 d-flex justify-content-center">
        <div class="card mb-3" style="width: 1000px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ Vite::asset('resources/images/jamas.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h2 class="card-title font-monospace text-center">My Profile</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item font-monospace">Nama: Ansar Nur Jamas</li>
                        <li class="list-group-item font-monospace">Nama Panggilan: Jamas</li>
                        <li class="list-group-item font-monospace">Asal: Surabaya</li>
                        <li class="list-group-item font-monospace">NIM: 1204210103</li>
                        <li class="list-group-item font-monospace">Semester: 4</li>
                        <li class="list-group-item font-monospace">Prodi: Sistem Informasi</li>
                        <li class="list-group-item font-monospace">Berkuliah di: INSTITUT TEKNOLOGI TELKOM SURABAYA</li>
                        <li class="list-group-item font-monospace"></li>
                      </ul>
                    <p class="   font-monospace text-justify">Saya menyukai dunia internet dan saya juga tertarik seputar pemrograman. Tujuan saya berkuliah di ITTS yaitu untuk menambah kemampuan saya dan pengetahuan dalam bidang pemrograman, karena saya ingin menjadi Web Developer. Di ITTS saya mengambil jurusan sistem informasi, Di prodi ini saya diajarkan tentang bisnis dan juga pemrograman </p>
                </div>
              </div>
            </div>
          </div>
      </div>
@endsection
