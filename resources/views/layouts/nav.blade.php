@php
    $currentRouteName = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-lg" style="background-color: #b648ff;">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="bi bi-box-fill">  </i>Master Barang
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" style="color:white" aria-current="page" href="{{route('home')}}">Home</a>
          <a class="nav-link active" style="color:white" href="{{route('profile')}}">Profile</a>
          <a class="nav-link active" style="color:white" href="{{route('barang.index')}}">List Barang</a>
        </div>
      </div>
    </div>
  </nav>
